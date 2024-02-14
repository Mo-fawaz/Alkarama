<?php

namespace App\Models;
use App\Models\Wear;
use App\Models\Game;
use App\Models\Prime;
use App\Models\league;

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
    public function Wear():object{
        return $this->hasOne(Wear::class);
      }

      public function Primes():object{
        return $this->hasMany(Prime::class);
      }

      public function Games():object{
        return $this->hasMany(Games::class);
      }

      public function leagues():object{
        return $this->hasMany(leagues::class);
      }

}
