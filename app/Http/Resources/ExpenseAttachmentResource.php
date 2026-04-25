<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ExpenseAttachmentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'expense_id' => $this->expense_id,
            'file_path' => $this->file_path,
            'file_url' => $this->file_path ? Storage::url($this->file_path) : null,
            'file_name' => $this->file_name,
            'mime_type' => $this->mime_type,
            'created_at' => $this->created_at?->toISOString(),
            'updated_at' => $this->updated_at?->toISOString(),
        ];
    }
}
