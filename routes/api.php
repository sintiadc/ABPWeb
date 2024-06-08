<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MyResepController;
use App\Http\Controllers\BMRController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    
});
Route::group(['middleware' => 'api','prefix' => 'v1'], function ($router) {
    Route::post('/resep/create-recipe', [RecipeController::class, 'createRecipe']);
    Route::post('/hitung-bmr', [BMRController::class, 'HitungBMR']);
    Route::post('/user/edit', [UserController::class, 'updateUser']);    
    Route::post('/resep/edit-recipe/{id}', [RecipeController::class, 'updateRecipe']);
});
    

Route::group(['middleware' => 'api','prefix' => 'v1'], function ($router) {
    Route::get('/resep/get-recipe', [RecipeController::class, 'getRecipe'])->name('get-recipe');
    Route::get('/resep/get-recipe/{id}', [RecipeController::class, 'getRecipeById'])->name('get-recipe-by-id');
    Route::get('/resep/update-recipe/{id}', [RecipeController::class, 'updateRecipe']);
    Route::get('/resep/tambah-like/{id}', [RecipeController::class, 'tambahLike']);
    Route::get('/resep/delete-recipe/{id}', [RecipeController::class, 'deleteRecipe']);
    Route::get('/resep/getByLike-recipe', [RecipeController::class, 'getRecipeByLike']);
    Route::get('/resep/getByFilter-recipe', [RecipeController::class, 'getRecipeByFilter']);
});