<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playeds', function (Blueprint $table) {
            $table->increments('play_id');
            $table->integer('play_artist_id')->unsigned();
            $table->foreign('play_artist_id')->references('artist_id')->on('artists')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('play_album_id')->unsigned();
            $table->foreign('play_album_id')->references('album_id')->on('albums')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('play_track_id')->unsigned();
            $table->foreign('play_track_id')->references('track_id')->on('tracks')->onDelete('cascade')->onUpdate('cascade');
            $table->date('play_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('playeds');
    }
}
