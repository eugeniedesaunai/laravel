<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MovieAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* permet de récupérer tout les films */
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


        $movie = new Movie();
        $movie->name =  $validated['name'];
        $movie->description =  $validated['description'];
        $movie->duration =  $validated['duration'];
        $movie->release =  $validated['release'];
        $movie->director_id =  $validated['director_id'];
        $movie->save();

        return "success";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return $movie;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|unique:movies|string|max:255',
        ]);

        $movie = Movie::findOrFail($id);

        $movie->update($validated);

        return $movie;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);

        $movie->delete();

        return "Film supprimé avec succès";
    }

    public function actor($id)
    {
        // Logique pour récupérer les acteurs du film avec l'ID donné
    }

    public function director($id)
    {
        // Logique pour récupérer le réalisateur du film avec l'ID donné
    }
}
