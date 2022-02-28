<?php

use App\Http\Controllers\home3controller;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [home3controller::class, 'index']);

Route::prefix('category')->group(function(){
    Route::get('/{id}', [ProductController::class, 'product']);
});

Route::get('/news/{id?}', [NewsController::class, 'news']);

Route::prefix('program')->group(function(){
    Route::get('/{id}', [ProgramController::class, 'program']);
});
