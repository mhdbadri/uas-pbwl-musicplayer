<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Played extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'play_id';

    public function artist()
    {
        return $this->belongsTo('App\Artist', 'play_artist_id');
    }

    public function album()
    {
        return $this->belongsTo('App\Album', 'play_album_id');
    }

    public function track()
    {
        return $this->belongsTo('App\Track', 'play_track_id');
    }

}
