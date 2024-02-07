<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Type\Integer;

class association extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'boss',
        'images',
        'description',
        'country',
        'sport_id'
    ];

    protected $casts = [
        'uuid'=>'string',
        'boss'=>'string',
        'images'=>'string',
        'description'=>'string',
        'country'=>'string',
        'sport_id'=>'integer',
    ];

   }
