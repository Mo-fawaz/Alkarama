<?php

namespace App\Models;
use App\Models\association;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topfan extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'name',
        'association_id',
    ];
    protected $casts = [
        'uuid'=>'string',
        'name'=>'string',
        'association_id'=>'integer',
    ];

    public function association():object{
        return $this->belongsTo(association::class);
      }

}
