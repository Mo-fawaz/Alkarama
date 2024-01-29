<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class boss extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'name',
        'start',
        'image',
    ];
    protected $casts = [
        'uuid'=>'string',
        'name'=>'string',
        'start'=>'string',
        'image'=>'string',
    ];
}
