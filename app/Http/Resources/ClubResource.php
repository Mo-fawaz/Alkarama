<?php

namespace App\Http\Resources;
use App\Models\Club;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\SportResource;

class ClubResource extends JsonResource
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
            'address'=>$this->address,
            'logo'=>$this->logo,
            'sport'=> SportResource::make($this->sport),
        ];
    }
}
