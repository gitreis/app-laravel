<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;



Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/menu', [IndexController::class, 'menu'])->name('menu');

Route::post('/contato', [ContatoController::class, 'contato'])->name('contato');
