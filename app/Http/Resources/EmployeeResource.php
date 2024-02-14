<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Employee;
use App\Http\Resources\SportResource;
class EmployeeResource extends JsonResource
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
            'jop_type'=>$this->jop_type,
            'work'=>$this->work,
            'image'=>$this->image,
            'sport'=>SportResource::make($this->sport),
        ];
    }
}
