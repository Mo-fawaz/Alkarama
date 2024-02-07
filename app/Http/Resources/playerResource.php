<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\sportResource;
class playerResource extends JsonResource
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
        'name'=>$this->name,
        'high'=>$this->high.'سم',
        'position'=>$this->position,
        'number'=>$this->number,
        'from'=>$this->from,
        'born'=>$this->born->year,
        'age'=>$this->born->diffForHumans(null,true),
        'first_club'=>$this->first_club,
        'career'=>$this->career,
        'image'=>$this->image,
        'sport_id'=>sportResource::make($this->sport)
        ];
    
    }
}
