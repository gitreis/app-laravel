<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CreditoController;

use Illuminate\Support\Facades\Route;



Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/movie', [MovieController::class, 'movie'])->name('movie');

Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');

Route::get('/credito', [CreditoController::class, 'credito'])->name('credito');
