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
    Schema::create('films', function (Blueprint $table) {
        $table->id();
        $table->string('title', 100);
        $table->text('description'); // Per descrizioni lunghe
        $table->integer('release_year');
        $table->string('genre');
        $table->string('cover')->nullable(); // Copertina (URL o path)
        $table->integer('duration'); // Durata in minuti
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
