<?php

namespace App\Models;
use App\Models\Sport;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function Sport():object{
        return $this->belongsTo(Sport::class);
      }
}
