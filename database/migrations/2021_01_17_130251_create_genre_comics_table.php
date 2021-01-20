<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenreComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre_comics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_komik')->constrained('komik')->cascadeOnUpdate()->cascadeOnDelete();;
            $table->foreignId('id_genre')->constrained('genre')->cascadeOnUpdate()->cascadeOnDelete();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genre_comics');
    }
}
