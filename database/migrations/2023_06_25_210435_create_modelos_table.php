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
        Schema::create('modelos', function (Blueprint $table) {
            $table->id();

            $table->String('nombre_modelo')->unique();
            $table->String('desc_calzado')->nullable();
            $table->double('precio')->nullable();
            $table->string("imagen", 250)->nullable();

            $table->unsignedBigInteger('id_genero');
            $table->unsignedBigInteger('id_color');
            $table->unsignedBigInteger('id_tallas');
            $table->unsignedBigInteger('id_marcas');

            $table->foreign('id_genero')->references('id')->on('generos');
            $table->foreign('id_color')->references('id')->on('colors');
            $table->foreign('id_tallas')->references('id')->on('tallas');
            $table->foreign('id_marcas')->references('id')->on('marcas');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelos');
    }
};
