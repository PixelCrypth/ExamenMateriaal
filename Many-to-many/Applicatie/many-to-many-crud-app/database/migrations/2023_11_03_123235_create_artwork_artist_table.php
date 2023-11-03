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
        Schema::create('artwork_artist', function (Blueprint $table) {
            $table->id();
            $table->integer('artwork_id'); // maak artwork_id aan als int
            $table->integer('artist_id'); // maak artist_id aan als int
            $table->foreign('artwork_id')->references('id')->on('artworks'); // maak artwork_id een connectie aan met de echte tabel artworks en verbind het aan de ID (forein index/relation)
            $table->foreign('artist_id')->references('id')->on('artists'); // maak artist_id een connectie aan met de echte tabel artist en verbind het aan de ID (forein index/relation)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artwork_artist');
    }
};
