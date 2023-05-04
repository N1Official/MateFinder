<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\GenderController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\SearcherController;

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

//Gender

Route::get('/gender', [GenderController::class, "index"])
    ->name("gender.index");

Route::get('/gender/{id}', [GenderController::class, "show"])
    ->name("gender.show");

Route::post('/gender', [GenderController::class, "store"])
    ->name("gender.store");

Route::put('/gender/{id}', [GenderController::class, "update"])
    ->name("gender.update");

Route::delete('/gender/{id}', [GenderController::class, "destroy"])
    ->name("gender.destroy");




//Game
Route::get('/game', [GameController::class, "index"])
    ->name("game.index");

Route::get('/game/{id}', [GameController::class, "show"])
    ->name("game.show");

Route::post('/game', [GameController::class, "store"])
    ->name("game.store");

Route::put('/game/{id}', [GameController::class, "update"])
    ->name("game.update");

Route::delete('/game/{id}', [GameController::class, "destroy"])
    ->name("game.destroy");



//Goal
Route::get('/goal', [GoalController::class, "index"])
    ->name("goal.index");

Route::get('/goal/{id}', [GoalController::class, "show"])
    ->name("goal.show");

Route::post('/goal', [GoalController::class, "store"])
    ->name("goal.store");

Route::put('/goal/{id}', [GoalController::class, "update"])
    ->name("goal.update");

Route::delete('/goal/{id}', [GoalController::class, "destroy"])
    ->name("goal.destroy");


//Server
Route::get('/server', [ServerController::class, "index"])
    ->name("server.index");

Route::get('/server/{id}', [ServerController::class, "show"])
    ->name("server.show");

Route::put('/server/{id}', [ServerController::class, "update"])
    ->name("server.update");



//Searcher
Route::get('/searcher', [SearcherController::class, "index"])
    ->name("searcher.index");

Route::get('/searcher/{id}', [SearcherController::class, "show"])
    ->name("searcher.show");

Route::post('/searcher', [SearcherController::class, "store"])
    ->name("searcher.store");

Route::put('/searcher/{id}', [SearcherController::class, "update"])
    ->name("searcher.update");

Route::delete('/searcher/{id}', [SearcherController::class, "destroy"])
    ->name("searcher.destroy");
