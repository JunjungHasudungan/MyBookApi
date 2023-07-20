<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return [
            'id'                => $this->id,
            'title'             => $this->title,
            'description'       => $this->description,
            'user_id'           => $this->user_id,
            'created_at'        => $this->created_at,
        ];
    }
}
