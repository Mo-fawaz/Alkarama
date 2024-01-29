<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'name',
        'jop_type',
        'work',
        'image',
        'sport_id',
    ];
    protected $casts = [
        'uuid'=>'string',
        'name'=>'string',
        'jop_type'=>'string',
        'work'=>'string',
        'image'=>'string',
        'sport_id'=>'string',
    ];

}
