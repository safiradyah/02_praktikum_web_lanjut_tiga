<?php

use App\Http\Controllers\home3controller;
use Illuminate\Support\Facades\Route;

Route::get('/home', [home3controller::class, 'index']);
