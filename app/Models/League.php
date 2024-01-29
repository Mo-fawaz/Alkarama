<?php

namespace App\Models;

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

}
