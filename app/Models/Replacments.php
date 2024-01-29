<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Replacments extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'inplayer_id',
        'outplayer_id'
    ];
    protected $casts = [
        'uuid'=>'string',
        'inplayer_id'=>'integer',
        'outplayer_id'=>'integer'
    ];

}
