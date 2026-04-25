<?php

namespace App\Services\Audit;

use App\Models\ActivityLog;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ActivityLogService
{
    public function paginate(array $filters = []): LengthAwarePaginator
    {
        return ActivityLog::query()
            ->with(['user', 'outlet'])
            ->when(!empty($filters['search']), function ($query) use ($filters) {
                $search = $filters['search'];

                $query->where(function ($q) use ($search) {
                    $q->where('action', 'like', "%{$search}%")
                        ->orWhere('module', 'like', "%{$search}%")
                        ->orWhere('description', 'like', "%{$search}%")
                        ->orWhere('reference_type', 'like', "%{$search}%")
                        ->orWhereHas('user', function ($userQuery) use ($search) {
                            $userQuery->where('name', 'like', "%{$search}%")
                                ->orWhere('email', 'like', "%{$search}%")
                                ->orWhere('username', 'like', "%{$search}%")
                                ->orWhere('phone', 'like', "%{$search}%");
                        })
                        ->orWhereHas('outlet', function ($outletQuery) use ($search) {
                            $outletQuery->where('name', 'like', "%{$search}%")
                                ->orWhere('code', 'like', "%{$search}%");
                        });
                });
            })
            ->when(!empty($filters['user_id']), fn ($query) => $query->where('user_id', (int) $filters['user_id']))
            ->when(!empty($filters['outlet_id']), fn ($query) => $query->where('outlet_id', (int) $filters['outlet_id']))
            ->when(!empty($filters['action']), fn ($query) => $query->where('action', $filters['action']))
            ->when(!empty($filters['module']), fn ($query) => $query->where('module', $filters['module']))
            ->when(!empty($filters['reference_type']), fn ($query) => $query->where('reference_type', $filters['reference_type']))
            ->when(!empty($filters['reference_id']), fn ($query) => $query->where('reference_id', (int) $filters['reference_id']))
            ->when(!empty($filters['created_from']), fn ($query) => $query->where('created_at', '>=', $filters['created_from']))
            ->when(!empty($filters['created_until']), fn ($query) => $query->where('created_at', '<=', $filters['created_until']))
            ->latest('id')
            ->paginate((int) ($filters['per_page'] ?? 10));
    }

    public function record(array $payload): ActivityLog
    {
        return ActivityLog::query()->create([
            'user_id' => $payload['user_id'] ?? null,
            'outlet_id' => $payload['outlet_id'] ?? null,
            'action' => $payload['action'],
            'module' => $payload['module'],
            'reference_type' => $payload['reference_type'] ?? null,
            'reference_id' => $payload['reference_id'] ?? null,
            'description' => $payload['description'] ?? null,
            'ip_address' => $payload['ip_address'] ?? null,
            'user_agent' => $payload['user_agent'] ?? null,
            'metadata' => $payload['metadata'] ?? null,
        ]);
    }

    public function recordFromRequest(
        Request $request,
        string $action,
        string $module,
        ?Model $reference = null,
        ?string $description = null,
        array $metadata = [],
        ?int $outletId = null
    ): ActivityLog {
        return $this->record([
            'user_id' => $request->user()?->id,
            'outlet_id' => $outletId,
            'action' => $action,
            'module' => $module,
            'reference_type' => $reference ? $reference::class : null,
            'reference_id' => $reference?->getKey(),
            'description' => $description,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'metadata' => $metadata,
        ]);
    }
}
