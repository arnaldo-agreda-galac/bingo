<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CartonPartida extends Model {
    use HasFactory;

    protected $table = 'carton_partida';

    public function jugador(): HasOne {
        return $this->hasOne(Jugador::class);
    }
}
