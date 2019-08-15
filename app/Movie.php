<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'year', 'score', 'description', 'duration', 'trailer_url', 'poster_url'];
    public $timestamps = false;
    public function genres() {
        return $this->belongsToMany(
            Genre::class,
            'movies_has_genres',
            'movies_id',
            'genres_id'
        );
    }
    
    public function casts() {
        return $this->belongsToMany(
            Cast::class,
            'movies_has_cast',
            'movies_id',
            'cast_id'
        );
    }
}
