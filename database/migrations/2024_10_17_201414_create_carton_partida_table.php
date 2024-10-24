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
        Schema::create('carton_partida', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carton_id');
            $table->unsignedBigInteger('jugador_id')->nullable();
            $table->unsignedBigInteger('partida_id');
            $table->unsignedBigInteger('jugador_id')->nullable();
            $table->boolean('pagado')->default(false);
            $table->boolean('ganador')->default(false);
            $table->timestamps();

            $table->foreign('partida_id')->references('id')->on('partidas');
            $table->foreign('carton_id')->references('id')->on('cartones');
            $table->foreign('jugador_id')->references('id')->on('jugadores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carton_partida');
    }
};
