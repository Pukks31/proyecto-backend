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
        Schema::create('producto', function (Blueprint $table) {
            $table->id('id_pro');
            $table->string('nombre_pro', 100);
            $table->integer('precio_pro');
            $table->integer('cant_pro');
            $table->unsignedBigInteger('id_cat_pro');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
