<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Prime;
use App\Http\Resources\SeasonResource;
use App\Http\Resources\SportResource;
class PrimeResource extends JsonResource
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
            'name'=>$this->name,
            'description'=>$this->description,
            'image'=>$this->image,
            'type'=>$this->type,
            'season'=>SeasonResource::make($this->season),
            'sport'=>SportResource::make($this->sport),
            ];
    }
}
