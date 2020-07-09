<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->increments('track_id');
            $table->string('track_name')->unique();
            $table->integer('track_artist_id')->unsigned();
            $table->foreign('track_artist_id')->references('artist_id')->on('artists')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('track_album_id')->unsigned();
            $table->foreign('track_album_id')->references('album_id')->on('albums')->onDelete('cascade')->onUpdate('cascade');
            $table->string('track_file');
            $table->time('track_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tracks');
    }
}
