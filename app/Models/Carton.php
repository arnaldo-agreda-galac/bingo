<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Carton extends Model
{
    use HasFactory;

    protected $table = 'cartones';

    public function partidas() : BelongsToMany {
        return $this->belongsToMany(Partida::class);
    }
}
