<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;


Route::get('/', [TodosController::class, 'index'])->name('home');

Route::resource('todos', TodosController::class);
