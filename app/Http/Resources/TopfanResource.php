<?php

namespace App\Http\Resources;
use App\Http\Resources\associationResource;

use Illuminate\Http\Resources\Json\JsonResource;

class TopfanResource extends JsonResource
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
        'association'=>associationResource::make($this->association),
           ];
    }
}
