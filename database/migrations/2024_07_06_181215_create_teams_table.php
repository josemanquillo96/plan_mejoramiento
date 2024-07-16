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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('nombre');
            $table->string('ciudad');
            $table->string('estadio');
            $table->string('aforo');
            $table->string('anio');

            //creacion de tablas foraneas
            //  $table->unsignedBigInteger('player_id')->nullable();
            //  $table->foreign('player_id')
            //      ->references('id')
            //      ->on('players')
            //      ->onDelete('cascade')
            //      ->onUpdate('cascade');
            //creamos el campo para albergar la llave foranea

            $table->unsignedBigInteger('president_id')->unique();  //unica
            $table->foreign('president_id')
                ->references('id')
                ->on('presidents')
                ->onDelete('cascade')             //get null para no borrar y no funcionar
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
