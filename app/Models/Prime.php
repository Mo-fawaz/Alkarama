<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prime extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'name',
        'description',
        'image',
        'type',
        'season_id',
        'sport_id'
    ];
    protected $casts = [
        'uuid'=>'string',
        'name'=>'string',
        'description'=>'string',
        'image'=>'string',
        'type'=>'string',
        'season_id'=>'integer',
        'sport_id'=>'integer',
    ];

}
