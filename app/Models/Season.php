<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'name',
        'start',
        'end'
    ];
    protected $casts = [
        'uuid'=>'string',
        'name'=>'string',
        'start'=>'datetime',
        'end'=>'datetime'
    ];

}
