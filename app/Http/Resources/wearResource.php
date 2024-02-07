<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class wearResource extends JsonResource
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
            'uuid'=>$this->uuid,
            'image'=>$this->image,
            'season_id'=>$this->season_id,
            'sport_id'=>$this->sport_id,
        ];
        
    }
}
