<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExpenseResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'expense_category_id' => $this->expense_category_id,
            'expense_date' => $this->expense_date?->toDateString(),
            'amount' => (float) $this->amount,
            'description' => $this->description,
            'status' => $this->status,
            'created_by' => $this->created_by,
            'approved_by' => $this->approved_by,
            'approved_at' => $this->approved_at?->toISOString(),
            'outlet' => new OutletResource($this->whenLoaded('outlet')),
            'category' => new ExpenseCategoryResource($this->whenLoaded('category')),
            'creator' => new UserResource($this->whenLoaded('creator')),
            'approver' => new UserResource($this->whenLoaded('approver')),
            'attachments' => ExpenseAttachmentResource::collection($this->whenLoaded('attachments')),
            'attachments_count' => $this->whenCounted('attachments'),
            'created_at' => $this->created_at?->toISOString(),
            'updated_at' => $this->updated_at?->toISOString(),
        ];
    }
}
