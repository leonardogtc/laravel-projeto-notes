<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('/', function () {
    echo "Hello world!";
});


Route::get('/about', function () {
    echo "Sobre o sistema";
});


Route::get('/main/{value}', [MainController::class, 'index']);
Route::get('/page2/{value}', [MainController::class, 'page2']);
Route::get('/page3/{value}', [MainController::class, 'page3']);



