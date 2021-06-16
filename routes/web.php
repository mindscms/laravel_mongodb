<?php

use App\Http\Controllers\GrandsonController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('sons', SonController::class);
Route::resource('grandsons', GrandsonController::class);

Route::resource('posts', PostController::class);
