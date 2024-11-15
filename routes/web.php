<?php

use App\Http\Controllers\FormProcessor;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userform', [FormProcessor::class, 'index']);
Route::get('/store_form', [FormProcessor::class, 'store'])->name('store_form');