<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/shorten', function (){
    return view('shorten');
});

Route::post('/shorten-url', [HomeController::class, 'shorten'])->name('shorten.url');
