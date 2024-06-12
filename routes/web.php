<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('index'))->name('home');

Route::get('/produtos', fn() => view('produtos'))->name('produtos');
Route::get('/financiamento', fn() => view('produtos'))->name('financiamento');
Route::get('/contato', fn() => view('produtos'))->name('contato');
