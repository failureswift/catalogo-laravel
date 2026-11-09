<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebMovieController;

Route::get('/', function () {
    return redirect()->route('movies.index');
});

Route::resource('movies', WebMovieController::class);