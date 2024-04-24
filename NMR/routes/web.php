<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\RecetteController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EtapeController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});


/**
 * Ces routes peuvent sevir de template
 */

Route::prefix('/recette')->name('recette.')->group(function () {
Route::get('/create', [RecetteController::class, 'create'])->name('create');
Route::post('/create', [RecetteController::class, 'store'])->name('store');
Route::get('/', [RecetteController::class, 'index'])->name('index');
Route::get('/{recette}', [RecetteController::class, 'show'])->name('show');
Route::get('/edit/{recette}', [RecetteController::class, 'edit'])->name('edit');
Route::put('/edit/{recette}', [RecetteController::class, 'update'])->name('update');
Route::delete('/{recette}', [RecetteController::class, 'destroy'])->name('delete');
});



Route::prefix('/ingredient')->name('ingredient.')->group(function () {
Route::get('/create', [IngredientController::class, 'create'])->name('create');
Route::post('/create', [IngredientController::class, 'store'])->name('store');
Route::get('/', [IngredientController::class, 'index'])->name('index');
Route::get('/{ingredient}', [IngredientController::class, 'show'])->name('show');
Route::get('/edit/{ingredient}', [IngredientController::class, 'edit'])->name('edit');
Route::put('/edit/{ingredient}', [IngredientController::class, 'update'])->name('update');
Route::delete('/{ingredient}', [IngredientController::class, 'destroy'])->name('delete');
});


Route::prefix('/user')->name('user.')->group(function () {
Route::get('/create', [UserController::class, 'create'])->name('create');
Route::post('/create', [UserController::class, 'store'])->name('store');
Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/{user}', [UserController::class, 'show'])->name('show');
Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');
Route::put('/edit/{user}', [UserController::class, 'update'])->name('update');
Route::delete('/{user}', [UserController::class, 'destroy'])->name('delete');
});


Route::prefix('/etape')->name('etape.')->group(function () {
Route::get('/create', [EtapeController::class, 'create'])->name('create');
Route::post('/create', [EtapeController::class, 'store'])->name('store');
Route::get('/', [EtapeController::class, 'index'])->name('index');
Route::get('/{etape}', [EtapeController::class, 'show'])->name('show');
Route::get('/edit/{etape}', [EtapeController::class, 'edit'])->name('edit');
Route::put('/edit/{etape}', [EtapeController::class, 'update'])->name('update');
Route::delete('/{etape}', [EtapeController::class, 'destroy'])->name('delete');
});


Route::get('/login', [AuthController::class, 'create'])->name('login');
Route::post('/login', [AuthController::class, 'store'])->name('login.store');
Route::get('/logout', [AuthController::class, 'destroy'])->name('logout');