<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        return [
            'uuid' => $this->uuid,
            'date' => $this->datatime,
            'status' => $this->status,
            'channel' => $this->channel,
            'round' => $this->round,
            'stadium' => $this->stadium,
            'season' => SeasonResource::make($this->season),
            'team_1' => ClubResource::make($this->club1),
            'team_2' => ClubResource::make($this->club2),
            'plan' => $this->plan,
        ];
    }
}
    