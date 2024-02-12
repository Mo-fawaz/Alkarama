<?php

namespace App\Models;
use App\Models\Season;
use App\Models\Club;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'wins',
        'lose',
        'draw',
        'goals',
        'points',
        'play',
        'club_id',
        'season_id'
    ];
    protected $casts = [
        'uuid'=>'string',
        'wins'=>'integer',
        'lose'=>'integer',
        'draw'=>'integer',
        'goals'=>'integer',
        'points'=>'integer',
        'play'=>'integer',
        'club_id'=>'integer',
        'season_id'=>'integer',
    ];

    public function Season():object{
        return $this->belongsTo(Season::class);
      }

      public function Club():object{
        return $this->belongsTo(Club::class);
      }

}
