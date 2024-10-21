<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('juegos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('partida_id');
            $table->unsignedBigInteger('jugador_id');
            $table->unsignedBigInteger('carton_id');
            $table->boolean('pagado')->default(false);
            $table->boolean('ganador')->default(false);
            $table->timestamps();

            $table->foreign('partida_id')->references('id')->on('partidas');
            $table->foreign('jugador_id')->references('id')->on('jugadores');
            $table->foreign('carton_id')->references('id')->on('cartones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juegos');
    }
};
