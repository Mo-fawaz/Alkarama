<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Player;
use App\Models\Game;


class Replacments extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'inplayer_id',
        'outplayer_id',
        'game_id',
    ];
    protected $casts = [
        'uuid'=>'string',
        'inplayer_id'=>'integer',
        'outplayer_id'=>'integer',
        'game_id'=>'integer',
    ];
    
    public function inplayer_id(): object
    {   
        return $this->belongsTo(player::class);
    }
    public function outplayer_id(): object
    {
        return $this->belongsTo(player::class);
    }
    public function game_id(): object
    {
        return $this->belongsTo(game::class);
    }



}
