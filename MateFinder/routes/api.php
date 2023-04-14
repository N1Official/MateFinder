<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GameCategoryController;

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


