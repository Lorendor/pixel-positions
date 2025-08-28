<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\JobController::class,'index']);
Route::get('/search', \App\Http\Controllers\SearchController::class);
Route::get('/tags/{tag}', \App\Http\Controllers\TagController::class);

Route::middleware('guest')->group(function () {

    Route::get('/register', [\App\Http\Controllers\RegisteredUserController::class,'create']);
    Route::post('/register', [\App\Http\Controllers\RegisteredUserController::class,'store']);
    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});

Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');
