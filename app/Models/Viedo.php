<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Viedo extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'url',
        'description',
    ];
    protected $casts = [
        'uuid'=>'string',
        'url'=>'string',
        'description'=>'string',
    ];
    public function video_able(): MorphTo
    {
        return $this->morphTo();
    }
}
