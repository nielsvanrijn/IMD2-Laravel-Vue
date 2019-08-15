<?php

use Illuminate\Http\Request;
Use App\Movie;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// List movies
Route::get('movies', 'MovieController@index');