<?php

namespace App\Http\Resources;
use App\Models\Season;


use Illuminate\Http\Resources\Json\JsonResource;

class SeasonResource extends JsonResource
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
            'name'=>$this->name,
            'uuid'=>$this->uuid,
            'start'=>$this->start->year,
            'end'=>$this->end->year,
           ];
    }
}
