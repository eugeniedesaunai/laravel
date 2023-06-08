<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorAPIController;
use App\Http\Controllers\MovieAPIController;
use App\Http\Controllers\DirectorAPIController;
use App\Services\Swapi;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* Pour les films */
/* Route::apiResource('movies', MovieAPIController::class); */
Route::get('/movies/{movie}/actor', [MovieAPIController::class, 'actors']);
Route::post('/movies/{movie}/actors', [MovieAPIController::class, 'linkActor']);
Route::get('/movies/{movie}/director', [MovieAPIController::class, 'director']);


/* Pour les acteurs */
/* Route::apiResource('actors', ActorAPIController::class); */


/* Pour les acteurs */
/* Route::apiResource('directors', DirectorAPIController::class); */


/* regroupement de tt les routes api */

Route::apiResources([
    'movies' => MovieAPIController::class,
    'actors' => ActorAPIController::class,
    'directors' => DirectorAPIController::class
]);


Route::get('/swapi', function () {
    $swapi = new Swapi();
    return $swapi->films()->get();
});
