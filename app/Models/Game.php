<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Game extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'date',
        'status',
        'channel',
        'round',
        'stadium',
        'season_id',
        'club_id',
        'club2_id',
        'plan',
    ];
    protected $casts = [
        'uuid'=>'string',
        'date'=>'datetime',
        'status'=>'string',
        'channel'=>'string',
        'round'=>'string',
        'stadium'=>'string',
        'season_id'=>'integer',
        'club_id'=>'integer',
        'club2_id'=>'integer',
        'plan'=>'string',
    ];
    public function club1():object
    {
        return $this->belongsTo(Club::class,'club_id','id');
    }
    public function club2():object
    {
        return $this->belongsTo(Club::class,'club2_id','id');
    }
    public function season():object
    {
        return $this->belongsTo(Season::class,'season_id','id');
    }
    public function plans():object
    {
        return $this->hasMany(Plan::class);
    }
    public function replacments():object
    {
        return $this->hasMany(Replacments::class);
    }
    public function statistic():object
    {
        return $this->hasMany(Statistic::class);
    }
    public function video():MorphOne
    {
     return $this->morphOne(Video::class,'video_able');
    }
    public function information():MorphOne
    {
     return $this->morphOne(Information::class,'information_able');
    }

}
