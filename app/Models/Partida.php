<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Partida extends Model
{
    use HasFactory;

    protected $table = 'partidas';

    public function resultados() : HasMany {
        return $this->hasMany(Resultado::class);
    }

    public function cartones() : BelongsToMany {
        return $this->belongsToMany(Carton::class);
    }
}
