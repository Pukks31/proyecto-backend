<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('juego', function (Blueprint $table) {
            $table->id('id_juego');
            $table->unsignedBigInteger('id_usuario');
            $table->time('hora_inicio_juego');
            $table->time('hora_fin_juego');
            $table->string('id_modalidad', 100);
            $table->integer('precio_juego');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juego');
    }
};
