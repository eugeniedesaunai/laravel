<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Movie;
use App\Models\Director;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class MovieAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return $movies;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* permet d'enregistrer les films en BDD via l'url de l'API */
        $validated = $request->validate([
            'name' => 'required|unique:movies|string|max:255',
            'description' => 'required',
            'duration' => 'required|numeric',
            'release' => 'required|date',
            'director_id' => 'nullable|integer'
        ]);


        return Movie::create($validated);

        return "success";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return $movie;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $validated = $request->validate([
            'name' => 'required|unique:movies|string|max:255|bail',
            'description' => 'bail|requiered|string',
            'duration' => 'bail|requiered|integer|min:0|max:18000', // 5 heures max
            'release' => 'bail|requiered|date_format:Y-m-d',
            'director_id' => 'bail|nullable|integer|exists:directors,id', // exists:directors,id  = vérifie si dans director il y a bien l'id correspondant
        ]);

        $movie->update($validated);

        return $movie;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return response()->noContent();
    }

    public function director(Movie $movie): Director
    {
        return $movie->director;
    }

    public function actors(Movie $movie): Collection
    {
        return $movie->actors;
    }

    public function linkActor(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $actorId = $request->input('actor_id');

        // Utilisez la méthode attach() pour lier l'acteur au film en utilisant la table pivot
        $movie->actors()->attach($actorId);

        return response()->json(['message' => 'Acteur lié au film avec succès']);
    }
}
