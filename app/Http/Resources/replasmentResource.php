<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class replasmentResource extends JsonResource
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
            'inplayer_id'=>$this->inplayer_id,
            'outplayer_id'=>$this->outplayer_id,
            'game_id'=>$this->game_id
        ];
        
     }
}
