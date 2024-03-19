<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" =>$this->id,
            "name" => $this->name,
            "is_completed" => (boolean)$this->is_completed,
            "updated_at" => Carbon::parse($this->updated_at)->format('d M Y g:i A'),
            "created_at" => Carbon::parse($this->created_at)->format('d M Y g:i A')
        ];
    }
}
