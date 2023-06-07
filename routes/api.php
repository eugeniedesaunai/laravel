<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorAPIController;
use App\Http\Controllers\MovieAPIController;
use App\Http\Controllers\DirectorAPIController;
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
Route::apiResource('movies', MovieAPIController::class);
Route::get('/movies/{movie}/actor', [MovieAPIController::class, 'actors']);
Route::post('/movies/{id}/actors', [MovieAPIController::class, 'linkActor']);
Route::get('/movies/{movie}/directors', [MovieAPIController::class, 'director']);


/* Pour les acteurs */
Route::apiResource('actors', ActorAPIController::class);


/* Pour les acteurs */
Route::apiResource('directors', DirectorAPIController::class);
