<?php

namespace App\Http\Resources;
use App\Models\League;
use Illuminate\Http\Resources\Json\JsonResource;


class LeagueResource extends JsonResource
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
            'wins'=>$this->wins,
            'lose'=>$this->lose,
            'draw'=>$this->draw,
            'goals'=>$this->goals,
            'points'=>$this->points,
            'play'=>$this->play,
            'club_name'=>$this->club->name,
            'season'=>$this->season->start->year.'/'.$this->season->end->year,
           ];
    }
}
