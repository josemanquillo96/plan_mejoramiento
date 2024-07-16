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
        Schema::create('game_team', function (Blueprint $table) {
            $table->id();
            //creacion de tablas foraneas
            $table->unsignedBigInteger('game_id')->nullable();
            $table->unsignedBigInteger('team_id')->nullable();

            $table->foreign('game_id')
                ->references('id')
                ->on('games')
                ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('team_id')
                ->references('id')
                ->on('teams')
                ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_team');
    }
};
