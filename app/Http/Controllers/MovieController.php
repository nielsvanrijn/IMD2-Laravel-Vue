<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Movie as MovieResource;

use App\Http\Requests\UpdateMovieRequest;
use App\Http\Requests\CreateMovieRequest;
use App\Http\Requests;
use App\Genre;
use App\Movie;
use Auth;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //--------------------------
    //     DEFAULT MOVIE LIST
    //--------------------------
    public function index()
    {
        $movies = Movie::orderBy('id', 'desc')->get();
        // return $movies;

        $all = Movie::with('genres')->get();

        return $all;
    }

    //--------------------------
    //     SHOW ADDMOVIE FORM
    //--------------------------
    public function moviecreate()
    {
        return view('addmovie');
    }

    //--------------------------
    // STORE MOVIE IN DATABASE
    //--------------------------
    public function moviestore(CreateMovieRequest $request){
        //return $request->all();
        $newmovie = new Movie();
        $newmovie->title = $request->title;
        $newmovie->year = $request->year;
        $newmovie->score = $request->score;
        $newmovie->description = $request->description;
        $newmovie->duration = $request->duration;
        // if(!$request->trailer == ""){
        $newmovie->trailer_url = $request->trailer_url;
        // }
        $newmovie->poster_url = $request->poster_url;
        $newmovie->save();
        $newmovie->genres()->sync($request->genres);
        $newmovie->casts()->sync($request->casts);
        return redirect('/');
    }
}
