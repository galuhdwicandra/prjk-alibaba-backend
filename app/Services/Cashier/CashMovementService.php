<?php

namespace App\Services\Cashier;

use App\Models\CashMovement;
use App\Models\CashierShift;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class CashMovementService
{
    public function __construct(
        private readonly CashierShiftService $cashierShiftService
    ) {
    }

    public function create(array $payload, ?int $userId = null): CashMovement
    {
        return DB::transaction(function () use ($payload, $userId) {
            $shift = CashierShift::query()->findOrFail($payload['cashier_shift_id']);

            if ($shift->status !== 'open') {
                throw ValidationException::withMessages([
                    'cashier_shift_id' => ['Cash movement hanya bisa dibuat pada shift open.'],
                ]);
            }

            $movement = CashMovement::create([
                'cashier_shift_id' => $shift->id,
                'movement_type' => $payload['movement_type'],
                'amount' => $payload['amount'],
                'reason' => $payload['reason'] ?? null,
                'notes' => $payload['notes'] ?? null,
                'created_by' => $userId,
            ]);

            $this->cashierShiftService->refreshExpectedCash($shift);

            return $movement->fresh()->load([
                'cashierShift.outlet',
                'cashierShift.user',
                'creator',
            ]);
        });
    }
}
