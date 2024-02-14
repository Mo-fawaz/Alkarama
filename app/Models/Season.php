<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prime;

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

    public function primes() : object {
        return $this->hasMany(Prime::class);
    }

}
