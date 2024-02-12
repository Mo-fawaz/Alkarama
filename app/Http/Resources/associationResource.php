<?php

namespace App\Http\Resources;
use App\Models\association;

use Illuminate\Http\Resources\Json\JsonResource;

class associationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return  [
            'boss'=>$this->boss,
            'images'=>$this->images,
            'description'=>$this->description,
        'country'=>$this->country,
        'sport_id'=>$this->sport->name,
            
           
           ];
    }
}
