<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     title="UserResource",
 *     description="User",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="ID"
 *     ),
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         description="Name"
 *     ),
 *     @OA\Property(
 *         property="surname",
 *         type="string",
 *         description="Surname"
 *     ),
 *     @OA\Property(
 *         property="position",
 *         type="string",
 *         description="Position"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         description="Description"
 *     ),
 *     @OA\Property(
 *         property="interests",
 *         type="string",
 *         description="Interests"
 *     ),
 *     @OA\Property(
 *         property="linkedin",
 *         type="string",
 *         description="LinkedIn"
 *     ),
 *     @OA\Property(
 *         property="github",
 *         type="string",
 *         description="GitHub"
 *     ),
 *     @OA\Property(
 *         property="telegram",
 *         type="string",
 *         description="Telegram"
 *     ),
 *     @OA\Property(
 *         property="image",
 *         type="string",
 *         description="Image"
 *     )
 * )
 */
class UserResource extends JsonResource
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
            'surname' => $this->surname,
            'position' => $this->position,
            'description' => $this->description,
            'interests' => $this->interests,
            'linkedin' => $this->linkedin,
            'github' => $this->github,
            'telegram' => $this->telegram,
            'image' => asset('storage/' . $this->image),
        ];
    }
}
