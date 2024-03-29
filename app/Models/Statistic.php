<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'name',
        'value',
        'game_id'
    ];
    protected $casts = [
        'uuid'=>'string',
        'name'=>'string',
        'value'=>'string',
        'game_id'=>'integer',
    ];
    public function game():object
    {
        return $this->belongsTo(Game::class);
    }
}
