<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class TrainingResource extends JsonResource
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
            'title' => $this->title,
            'qualification' => $this->qualification,
            'programm_name' => $this->programm_name,
            'date_from' => Carbon::parse($this->date_from)->translatedFormat('F Y'),
            'date_to' => Carbon::parse($this->date_to)->translatedFormat('F Y'),
        ];
    }
}
