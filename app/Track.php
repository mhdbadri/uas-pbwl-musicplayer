<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'track_id';

    public function artist()
    {
        return $this->belongsTo('App\Artist', 'track_artist_id');
    }

    public function album()
    {
        return $this->belongsTo('App\Album', 'track_album_id');
    }
}
