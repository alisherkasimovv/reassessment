<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GroupResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'facultyId' => $this->faculty_id,
            'language' => $this->language,
            'grade' => $this->grade,
            'students' => StudentResource::collection($this->whenLoaded('students'))
        ];
    }
}
