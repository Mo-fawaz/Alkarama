<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sport;
use App\Models\Season;
class Wear extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'image',
        'season_id',
        'sport_id',
    ];
    protected $casts = [
        'uuid' => 'string',
        'image' => 'string',
        'season_id' => 'integer',
        'sport_id' => 'integer'
    ];
    public function season(): object
    {
        return $this->belongsTo(season::class);
    }
    public function sport(): object
    {
        return $this->belongsTo(Sport::class);
    }
}
