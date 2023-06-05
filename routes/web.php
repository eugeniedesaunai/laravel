<?php

use App\Models\Movie;
use App\Models\Argument;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* exemple de routes avec un retour sans vue */

Route::get('/post', function () {
    return 'cc';
});

/* exemple de route avec une condition de parametre  */
Route::get('/posts/{id}', function ($id) {
    return "affichage de l'article $id";
})->where('id', '[0-9]+');


Route::get('/', [
    MainController::class,
    'index'
])->name('index');

/* permet d'utiliser le query builder  */
/* Route::get('/db', function () {
    DB::table('arguments')->insert([
        'title' => 'Lorem ipsum',
        'body' => 'Lorem ipsum dolor sit amet'
    ]);
}); */

/* via Eloquent */
Route::get('/db', function () {
    $argument = new Argument();
    $argument->title = 'Lorem ipsum';
    $argument->body = 'Lorem ipsum dolor sit amet';
    $argument->save();
});

// supprimer une donnée
Route::get('db_drop', function () {
    $movie = Movie::find(1);
    $movie->delete();
});


// permet de sauvegarder et modifier en BDD
Route::get('db_modify', function () {
    $movie = Movie::find(1);
    $movie->duration = 6000;
    $movie->release = "2013-06-16";
    $movie->save();
});

// permet d'utiliser les collections
Route::get('/collection', function () {
    $promo = [
        [
            'name' => 'steven',
            'age' => 36
        ],
        [
            'name' => 'kevin',
            'age' => 26,
        ],
        [
            'name' => 'mikael',
            'age' => 76,
        ],
    ];


    $promoCollection = collect($promo);


    dd(
        $promoCollection->pluck('name'),
        $promoCollection->sortBy('age'),
    );
});


//list toute les données contenu dans la table argument
Route::get('/dblist', function () {
    $argument = Argument::all();
    dd($argument);
});


// Route pour envoyer la donnée du form newsletter
Route::post('/newsletter', [MainController::class, 'newsletter']);
