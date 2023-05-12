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
        Schema::create('games', function (Blueprint $table) {
            $table->id();

            $table->date('date');
            $table->unsignedBigInteger('local_team_id')->nullable(); //local
            $table->foreign('local_team_id')->references('id')->on('teams')->onDelete('set null');
            $table->unsignedBigInteger('visitant_team_id')->nullable(); //visitant
            $table->foreign('visitant_team_id')->references('id')->on('teams')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
