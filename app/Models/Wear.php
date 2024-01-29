<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wear extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'image',
        'season_id'
    ];
    protected $casts = [
        'uuid'=>'string',
        'image'=>'string',
        'season_id'=>'integer',
    ];

}
