<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Hello world!";
});


Route::get('/about', function () {
    echo "Sobre o sistema";
});


Route::get('/main/{value}', [MainController::class, 'index']);


