<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prime;
use App\Models\Club;
use App\Models\Employee;
class Sport extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'name',
        'image'
    ];
    protected $casts = [
        'uuid'=>'string',
        'name'=>'string',
        'image'=>'string',
    ];

    public function primes() :object {
        return $this->hasMany(Prime::class);
    }
    public function employees() :object {
        return $this->hasMany(Employee::class);
    }
    public function clubs() :object {
        return $this->hasMany(Club::class);
    }

}
