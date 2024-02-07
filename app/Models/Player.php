<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\plan;
use App\Models\Sport;

class Player extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'name',
        'high',
        'position',
        'number',
        'from',
        'born',
        'first_club',
        'career',
        'image',
        'sport_id'
    ];
    protected $casts = [
        'uuid'=>'string',
        'name'=>'string',
        'high'=>'integer',
        'position'=>'string',
        'number'=>'integer',
        'from'=>'string',
        'born'=>'datetime',
        'first_club'=>'string',
        'career'=>'string',
        'image'=>'string',
        'sport_id'=>'integer',
    ];
    public function plan():object{
        return $this->hasOne(Plan::class);
    }
    public function sport():object{
        return $this->belongsTo(Sport::class);
    }
    
}
