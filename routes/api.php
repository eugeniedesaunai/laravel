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


Route::apiResource('movies', MovieAPIController::class)/* ->except(['create', 'edit']) */;
/* Route::get('/movies', [MovieAPIController::class, 'index']);
Route::post('/movies', [MovieAPIController::class, 'store']);
Route::get('/movies/{id}', [MovieAPIController::class, 'show']);
Route::patch('/movies/{id}', [MovieAPIController::class, 'update']);
Route::delete('/movies/{id}', [MovieAPIController::class, 'destroy']); */
Route::get('/movies/{id}/actor', [MovieAPIController::class, 'actors']);
Route::get('/movies/{id}/directors', [MovieAPIController::class, 'director']);

/* Pour les acteurs */
Route::apiResource('actors', ActorAPIController::class)/* ->except(['create', 'edit']) */;

/* Pour les acteurs */
Route::apiResource('directors', DirectorAPIController::class);
