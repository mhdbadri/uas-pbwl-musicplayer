<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'album_id';

    public function artist()
    {
        return $this->belongsTo('App\Artist', 'album_artist_id');
    }
}
