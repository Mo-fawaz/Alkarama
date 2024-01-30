<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'datatime',
        'status',
        'channel',
        'round',
        'stadium',
        'season_id',
        'club_id',
        'club2_id',
        'plan',
    ];
    protected $casts = [
        'uuid'=>'string',
        'datatime'=>'datetime',
        'status'=>'string',
        'channel'=>'string',
        'round'=>'string',
        'stadium'=>'string',
        'season_id'=>'string',
        'club_id'=>'integer',
        'club2_id'=>'integer',
        'plan'=>'string',
    ];

}
