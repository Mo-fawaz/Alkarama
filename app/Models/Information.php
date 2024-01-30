<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Information extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'image',
        'reads',
        'type',
    ];
    protected $casts = [
        'title'=>'string',
        'content'=>'string',
        'image'=>'string',
        'reads'=>'integer',
        'type'=>'string',
    ];
    public function information_able(): MorphTo
    {
        return $this->morphTo();
    }
}
