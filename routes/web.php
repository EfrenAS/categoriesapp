<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SubcategoriaController;
use Illuminate\Support\Facades\Route;

Route::resource('categoria', CategoriaController::class);
Route::resource('subcategoria', SubcategoriaController::class);
