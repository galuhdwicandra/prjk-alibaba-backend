<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CashMovementResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'cashier_shift_id' => $this->cashier_shift_id,
            'cashier_shift' => $this->whenLoaded('cashierShift', fn () => [
                'id' => $this->cashierShift?->id,
                'shift_number' => $this->cashierShift?->shift_number,
                'status' => $this->cashierShift?->status,
                'outlet_id' => $this->cashierShift?->outlet_id,
            ]),
            'movement_type' => $this->movement_type,
            'amount' => (float) $this->amount,
            'reason' => $this->reason,
            'notes' => $this->notes,
            'created_by' => $this->created_by,
            'creator' => $this->whenLoaded('creator', fn () => [
                'id' => $this->creator?->id,
                'name' => $this->creator?->name,
            ]),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
