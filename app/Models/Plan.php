<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'player_id',
        'game_id',
        'status'
    ];
    protected $casts = [
        'uuid'=>'string',
        'player_id'=>'integer',
        'game_id'=>'integer',
        'status'=>'string',
    ];
    public function player():object
    {
        return $this->belongsTo(Player::class);
    }
    public function game():object
    {
        return $this->belongsTo(Game::class);
    }

}
