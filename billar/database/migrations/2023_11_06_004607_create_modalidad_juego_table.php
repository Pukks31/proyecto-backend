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
        Schema::create('modalidad_juego', function (Blueprint $table) {
            $table->string('id_modalidad', 100)->primary();
            $table->string('nombre_mod', 100);
            $table->integer('precio_mod');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modalidad_juego');
    }
};
