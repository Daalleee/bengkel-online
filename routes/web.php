<?php

use App\Http\Controllers\BengkelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('bengkels', BengkelController::class);
