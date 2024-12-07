<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get("/", [WebController::class, 'welcome']) -> name('welcome');

Route::get('/home', function () {
    echo 'welcome';
});

Route::get('/home', [WebController::class, 'home']) -> name('home');
Route::get('/about', [WebController::class, 'about'])-> name('about');
Route::get('/contact', [WebController::class, 'contact'])-> name('contact');