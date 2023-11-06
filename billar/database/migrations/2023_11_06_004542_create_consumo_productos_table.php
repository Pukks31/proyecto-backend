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
        Schema::create('consumo_productos', function (Blueprint $table) {
            $table->id('id_consumo');
            $table->unsignedBigInteger('id_juego');
            $table->unsignedBigInteger('id_pro');
            $table->integer('cant_consumo');
            $table->integer('precio_pro');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consumo_productos');
    }
};
