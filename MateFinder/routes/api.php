<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GameCategoryController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GameRankController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\RankController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserGamesController;

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

//Category

Route::get('/category', [CategoryController::class, "index"])
    ->name("category.index");

Route::get('/category/{id}', [CategoryController::class, "show"])
    ->name("category.show");

Route::post('/category', [CategoryController::class, "store"])
    ->name("category.store");

Route::put('/category/{id}', [CategoryController::class, "update"])
    ->name("category.update");

Route::delete('/category/{id}', [CategoryController::class, "destroy"])
    ->name("category.destroy");


//GameCategory
Route::get('/gamecategory', [GameCategoryController::class, "index"])
    ->name("gamecategory.index");

Route::get('/gamecategory/{id}', [GameCategoryController::class, "show"])
    ->name("gamecategory.show");

Route::post('/gamecategory', [GameCategoryController::class, "store"])
    ->name("gamecategory.store");

Route::put('/gamecategory/{id}', [GameCategoryController::class, "update"])
    ->name("gamecategory.update");

Route::delete('/gamecategory/{id}', [GameCategoryController::class, "destroy"])
    ->name("gamecategory.destroy");


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


//GameRank
Route::get('/gamerank', [GameRankController::class, "index"])
    ->name("gamerank.index");

Route::get('/gamerank/{id}', [GameRankController::class, "show"])
    ->name("gamerank.show");

Route::post('/gamerank', [GameRankController::class, "store"])
    ->name("gamerank.store");

Route::put('/gamerank/{id}', [GameRankController::class, "update"])
    ->name("gamerank.update");

Route::delete('/gamerank/{id}', [GameRankController::class, "destroy"])
    ->name("gamerank.destroy");


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


//Rank
Route::get('/rank', [RankController::class, "index"])
    ->name("rank.index");

Route::get('/rank/{id}', [RankController::class, "show"])
    ->name("rank.show");

Route::post('/rank', [RankController::class, "store"])
    ->name("rank.store");

Route::put('/rank/{id}', [RankController::class, "update"])
    ->name("rank.update");

Route::delete('/rank/{id}', [RankController::class, "destroy"])
    ->name("rank.destroy");


//Server
Route::get('/server', [ServerController::class, "index"])
    ->name("server.index");

Route::get('/server/{id}', [ServerController::class, "show"])
    ->name("server.show");

Route::put('/server/{id}', [ServerController::class, "update"])
    ->name("server.update");



//User
Route::get('/user', [UserController::class, "index"])
    ->name("user.index");

Route::get('/user/{id}', [UserController::class, "show"])
    ->name("user.show");

Route::post('/user', [UserController::class, "store"])
    ->name("user.store");

Route::put('/user/{id}', [UserController::class, "update"])
    ->name("user.update");

Route::delete('/user/{id}', [UserController::class, "destroy"])
    ->name("user.destroy");


//UserGames
Route::get('/usergames', [UserGamesController::class, "index"])
    ->name("usergames.index");

Route::get('/usergames/{id}', [UserGamesController::class, "show"])
    ->name("usergames.show");

Route::post('/ususergameser', [UserGamesController::class, "store"])
    ->name("usergames.store");

Route::put('/usergames/{id}', [UserGamesController::class, "update"])
    ->name("usergames.update");

Route::delete('/usergames/{id}', [UserGamesController::class, "destroy"])
    ->name("usergames.destroy");
    