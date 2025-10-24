<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view(uri:'/login',view:'login');
Route::view(uri:'/alipage',view:'alipage');