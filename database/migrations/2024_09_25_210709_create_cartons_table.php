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
        Schema::create('cartones', function (Blueprint $table) {
            $table->id();
            $table->string('numero', 10);
            $table->integer('b0');
            $table->integer('b1');
            $table->integer('b2');
            $table->integer('b3');
            $table->integer('b4');
            $table->integer('i0');
            $table->integer('i1');
            $table->integer('i2');
            $table->integer('i3');
            $table->integer('i4');
            $table->integer('n0');
            $table->integer('n1');
            $table->integer('n2');
            $table->integer('n3');
            $table->integer('n4');
            $table->integer('g0');
            $table->integer('g1');
            $table->integer('g2');
            $table->integer('g3');
            $table->integer('g4');
            $table->integer('o0');
            $table->integer('o1');
            $table->integer('o2');
            $table->integer('o3');
            $table->integer('o4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartones');
    }
};
