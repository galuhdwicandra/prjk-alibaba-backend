<?php
namespace App\Services\Notification;

use App\Models\AlertRule;
use App\Models\CashierShift;
use App\Models\Notification;
use App\Models\NotificationLog;
use App\Models\Order;
use App\Models\OutletMaterialStock;
use App\Models\Voucher;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class NotificationService
{
    public function paginate(array $filters = []): LengthAwarePaginator
    {
        return Notification::query()
            ->with(['outlet', 'user'])
            ->withCount('logs')
            ->when(! empty($filters['outlet_id']), function (Builder $query) use ($filters) {
                $query->where('outlet_id', (int) $filters['outlet_id']);
            })
            ->when(! empty($filters['user_id']), function (Builder $query) use ($filters) {
                $query->where('user_id', (int) $filters['user_id']);
            })
            ->when(! empty($filters['type']), function (Builder $query) use ($filters) {
                $query->where('type', (string) $filters['type']);
            })
            ->when(! empty($filters['severity']), function (Builder $query) use ($filters) {
                $query->where('severity', (string) $filters['severity']);
            })
            ->when(! empty($filters['status']), function (Builder $query) use ($filters) {
                $query->where('status', (string) $filters['status']);
            })
            ->latest('id')
            ->paginate((int) ($filters['per_page'] ?? 10));
    }

    public function markAsRead(Notification $notification, ?int $userId = null): Notification
    {
        return DB::transaction(function () use ($notification, $userId) {
            if ($notification->status === 'unread') {
                $notification->update([
                    'status'  => 'read',
                    'read_at' => now(),
                ]);

                $this->log([
                    'notification_id' => $notification->id,
                    'outlet_id'       => $notification->outlet_id,
                    'user_id'         => $userId,
                    'action'          => 'read',
                    'status'          => 'success',
                    'channel'         => 'database',
                    'message'         => 'Notification ditandai sudah dibaca.',
                    'payload'         => [
                        'notification_id' => $notification->id,
                    ],
                ]);
            }

            return $notification->fresh(['outlet', 'user', 'logs']);
        });
    }

    public function markAllAsRead(?int $outletId = null, ?int $userId = null): int
    {
        $query = Notification::query()
            ->where('status', 'unread')
            ->when($outletId, fn(Builder $builder) => $builder->where('outlet_id', $outletId));

        /** @var Collection<int, Notification> $notifications */
        $notifications = $query->get();

        $count = 0;

        DB::transaction(function () use ($notifications, $userId, &$count) {
            foreach ($notifications as $notification) {
                $notification->update([
                    'status'  => 'read',
                    'read_at' => now(),
                ]);

                $this->log([
                    'notification_id' => $notification->id,
                    'outlet_id'       => $notification->outlet_id,
                    'user_id'         => $userId,
                    'action'          => 'read',
                    'status'          => 'success',
                    'channel'         => 'database',
                    'message'         => 'Notification ditandai sudah dibaca.',
                    'payload'         => [
                        'notification_id' => $notification->id,
                    ],
                ]);

                $count++;
            }
        });

        return $count;
    }

    public function resolve(Notification $notification, ?int $userId = null): Notification
    {
        return DB::transaction(function () use ($notification, $userId) {
            $notification->update([
                'status'      => 'resolved',
                'resolved_at' => now(),
                'read_at'     => $notification->read_at ?: now(),
            ]);

            $this->log([
                'notification_id' => $notification->id,
                'outlet_id'       => $notification->outlet_id,
                'user_id'         => $userId,
                'action'          => 'resolved',
                'status'          => 'success',
                'channel'         => 'database',
                'message'         => 'Notification diresolve.',
                'payload'         => [
                    'notification_id' => $notification->id,
                ],
            ]);

            return $notification->fresh(['outlet', 'user', 'logs']);
        });
    }

    public function scan(array $filters = [], ?int $userId = null): array
    {
        $rules = AlertRule::query()
            ->where('is_active', true)
            ->when(! empty($filters['outlet_id']), function (Builder $query) use ($filters) {
                $query->where(function (Builder $ruleQuery) use ($filters) {
                    $ruleQuery->whereNull('outlet_id')
                        ->orWhere('outlet_id', (int) $filters['outlet_id']);
                });
            })
            ->when(! empty($filters['alert_type']), function (Builder $query) use ($filters) {
                $query->where('alert_type', (string) $filters['alert_type']);
            })
            ->get();

        /** @var Collection<int, AlertRule> $rules */
        $rules = AlertRule::query()
            ->where('is_active', true)
            ->when(! empty($filters['outlet_id']), function (Builder $query) use ($filters) {
                $query->where(function (Builder $ruleQuery) use ($filters) {
                    $ruleQuery->whereNull('outlet_id')
                        ->orWhere('outlet_id', (int) $filters['outlet_id']);
                });
            })
            ->when(! empty($filters['alert_type']), function (Builder $query) use ($filters) {
                $query->where('alert_type', (string) $filters['alert_type']);
            })
            ->get();

        $created = [
            'low_stock'        => 0,
            'shift_not_closed' => 0,
            'promo_expiring'   => 0,
            'order_overdue'    => 0,
        ];

        foreach ($rules as $rule) {
            $count = match ($rule->alert_type) {
                'low_stock'        => $this->scanLowStock($rule, $userId),
                'shift_not_closed' => $this->scanShiftNotClosed($rule, $userId),
                'promo_expiring'   => $this->scanPromoExpiring($rule, $userId),
                'order_overdue'    => $this->scanOrderOverdue($rule, $userId),
                default            => 0,
            };

            $created[$rule->alert_type] += $count;

            $rule->update([
                'last_run_at' => now(),
            ]);
        }

        return [
            'created'       => $created,
            'total_created' => array_sum($created),
            'scanned_at'    => now()->toDateTimeString(),
            'scanned_by'    => $userId,
        ];
    }

    private function scanLowStock(AlertRule $rule, ?int $userId = null): int
    {
        $count = 0;

        OutletMaterialStock::query()
            ->with(['outlet', 'rawMaterial.unit'])
            ->whereHas('rawMaterial', fn(Builder $query) => $query->where('is_active', true))
            ->when($rule->outlet_id, fn(Builder $query) => $query->where('outlet_id', $rule->outlet_id))
            ->chunkById(100, function ($stocks) use ($rule, $userId, &$count) {
                foreach ($stocks as $stock) {
                    if (! $stock->rawMaterial) {
                        continue;
                    }

                    $limit = $rule->threshold_value !== null
                        ? (float) $rule->threshold_value
                        : (float) $stock->rawMaterial->minimum_stock;

                    $qtyOnHand = (float) $stock->qty_on_hand;

                    if ($limit <= 0 || $qtyOnHand > $limit) {
                        continue;
                    }

                    if ($this->createOnce([
                        'notification' => [
                            'outlet_id' => $stock->outlet_id,
                            'user_id'   => null,
                            'type'      => 'low_stock',
                            'severity'  => $this->mapSeverity($rule->severity),
                            'status'    => 'unread',
                            'title'     => 'Stok bahan baku menipis',
                            'message'   => "{$stock->rawMaterial->name} di {$stock->outlet?->name} tersisa {$qtyOnHand}, batas minimum {$limit}.",
                            'source_type' => OutletMaterialStock::class,
                            'source_id'   => $stock->id,
                            'data'        => [
                                'alert_rule_id'     => $rule->id,
                                'raw_material_id'   => $stock->rawMaterial->id,
                                'raw_material_name' => $stock->rawMaterial->name,
                                'qty_on_hand'       => $qtyOnHand,
                                'threshold'         => $limit,
                                'unit'              => $stock->rawMaterial->unit?->code,
                            ],
                        ],
                        'alert_rule_id' => $rule->id,
                        'user_id'       => $userId,
                    ])) {
                        $count++;
                    }
                }
            });

        return $count;
    }

    private function scanShiftNotClosed(AlertRule $rule, ?int $userId = null): int
    {
        $count   = 0;
        $minutes = (int) ($rule->threshold_minutes ?: $rule->threshold_value ?: 720);
        $limit   = now()->subMinutes($minutes);

        CashierShift::query()
            ->with(['outlet', 'user'])
            ->where('status', 'open')
            ->where('opened_at', '<=', $limit)
            ->when($rule->outlet_id, fn(Builder $query) => $query->where('outlet_id', $rule->outlet_id))
            ->chunkById(100, function ($shifts) use ($rule, $userId, $minutes, &$count) {
                foreach ($shifts as $shift) {
                    if ($this->createOnce([
                        'notification' => [
                            'outlet_id' => $shift->outlet_id,
                            'user_id'   => $shift->user_id,
                            'type'      => 'shift_not_closed',
                            'severity'  => $this->mapSeverity($rule->severity),
                            'status'    => 'unread',
                            'title'     => 'Shift kasir belum ditutup',
                            'message'   => "Shift {$shift->shift_number} milik {$shift->user?->name} di {$shift->outlet?->name} belum ditutup lebih dari {$minutes} menit.",
                            'source_type' => CashierShift::class,
                            'source_id'   => $shift->id,
                            'data'        => [
                                'alert_rule_id'     => $rule->id,
                                'shift_number'      => $shift->shift_number,
                                'opened_at'         => $shift->opened_at?->toDateTimeString(),
                                'threshold_minutes' => $minutes,
                            ],
                        ],
                        'alert_rule_id' => $rule->id,
                        'user_id'       => $userId,
                    ])) {
                        $count++;
                    }
                }
            });

        return $count;
    }

    private function scanPromoExpiring(AlertRule $rule, ?int $userId = null): int
    {
        $count = 0;
        $days  = (int) ($rule->days_before ?: $rule->threshold_value ?: 3);
        $until = now()->addDays($days)->endOfDay();

        Voucher::query()
            ->where('is_active', true)
            ->whereNotNull('ends_at')
            ->whereBetween('ends_at', [now(), $until])
            ->chunkById(100, function ($vouchers) use ($rule, $userId, $days, &$count) {
                foreach ($vouchers as $voucher) {
                    if ($this->createOnce([
                        'notification' => [
                            'outlet_id' => $rule->outlet_id,
                            'user_id'   => null,
                            'type'      => 'promo_expiring',
                            'severity'  => $this->mapSeverity($rule->severity),
                            'status'    => 'unread',
                            'title'     => 'Voucher segera berakhir',
                            'message'   => "Voucher {$voucher->code} - {$voucher->name} akan berakhir pada {$voucher->ends_at?->toDateTimeString()}.",
                            'source_type' => Voucher::class,
                            'source_id'   => $voucher->id,
                            'data'        => [
                                'alert_rule_id' => $rule->id,
                                'voucher_code'  => $voucher->code,
                                'voucher_name'  => $voucher->name,
                                'ends_at'       => $voucher->ends_at?->toDateTimeString(),
                                'days_before'   => $days,
                            ],
                        ],
                        'alert_rule_id' => $rule->id,
                        'user_id'       => $userId,
                    ])) {
                        $count++;
                    }
                }
            });

        return $count;
    }

    private function scanOrderOverdue(AlertRule $rule, ?int $userId = null): int
    {
        $count   = 0;
        $minutes = (int) ($rule->threshold_minutes ?: $rule->threshold_value ?: 30);
        $limit   = now()->subMinutes($minutes);

        Order::query()
            ->with(['outlet', 'customer'])
            ->whereIn('order_status', ['pending', 'confirmed', 'preparing'])
            ->where('ordered_at', '<=', $limit)
            ->when($rule->outlet_id, fn(Builder $query) => $query->where('outlet_id', $rule->outlet_id))
            ->chunkById(100, function ($orders) use ($rule, $userId, $minutes, &$count) {
                foreach ($orders as $order) {
                    if ($this->createOnce([
                        'notification' => [
                            'outlet_id' => $order->outlet_id,
                            'user_id'   => $order->created_by,
                            'type'      => 'order_overdue',
                            'severity'  => $this->mapSeverity($rule->severity),
                            'status'    => 'unread',
                            'title'     => 'Order terlambat diproses',
                            'message'   => "Order {$order->order_number} di {$order->outlet?->name} masih berstatus {$order->order_status} lebih dari {$minutes} menit.",
                            'source_type' => Order::class,
                            'source_id'   => $order->id,
                            'data'        => [
                                'alert_rule_id'     => $rule->id,
                                'order_number'      => $order->order_number,
                                'queue_number'      => $order->queue_number,
                                'order_status'      => $order->order_status,
                                'ordered_at'        => $order->ordered_at?->toDateTimeString(),
                                'threshold_minutes' => $minutes,
                            ],
                        ],
                        'alert_rule_id' => $rule->id,
                        'user_id'       => $userId,
                    ])) {
                        $count++;
                    }
                }
            });

        return $count;
    }

    private function createOnce(array $payload): bool
    {
        $notificationPayload = $payload['notification'];

        $exists = Notification::query()
            ->where('type', $notificationPayload['type'])
            ->where('source_type', $notificationPayload['source_type'])
            ->where('source_id', $notificationPayload['source_id'])
            ->whereIn('status', ['unread', 'read'])
            ->exists();

        if ($exists) {
            $this->log([
                'notification_id' => null,
                'alert_rule_id'   => $payload['alert_rule_id'],
                'outlet_id'       => $notificationPayload['outlet_id'],
                'user_id'         => $payload['user_id'] ?? null,
                'action'          => 'skipped',
                'status'          => 'skipped',
                'channel'         => 'database',
                'message'         => 'Notification aktif dengan source yang sama sudah ada.',
                'payload'         => $notificationPayload,
            ]);

            return false;
        }

        DB::transaction(function () use ($notificationPayload, $payload) {
            $notification = Notification::query()->create($notificationPayload);

            $this->log([
                'notification_id' => $notification->id,
                'alert_rule_id'   => $payload['alert_rule_id'],
                'outlet_id'       => $notification->outlet_id,
                'user_id'         => $payload['user_id'] ?? null,
                'action'          => 'generated',
                'status'          => 'success',
                'channel'         => 'database',
                'message'         => $notification->message,
                'payload'         => $notificationPayload,
            ]);
        });

        return true;
    }

    private function log(array $payload): NotificationLog
    {
        return NotificationLog::query()->create([
            'notification_id' => $payload['notification_id'] ?? null,
            'alert_rule_id'   => $payload['alert_rule_id'] ?? null,
            'outlet_id'       => $payload['outlet_id'] ?? null,
            'user_id'         => $payload['user_id'] ?? null,
            'action'          => $payload['action'],
            'status'          => $payload['status'] ?? 'success',
            'channel'         => $payload['channel'] ?? 'database',
            'message'         => $payload['message'] ?? null,
            'payload'         => $payload['payload'] ?? null,
            'logged_at'       => now(),
        ]);
    }

    private function mapSeverity(string $severity): string
    {
        return match ($severity) {
            'low'    => 'info',
            'medium' => 'warning',
            'high', 'critical' => 'danger',
            default  => 'warning',
        };
    }
}
