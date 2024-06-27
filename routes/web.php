<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/name', function () {
    return view('name-field');
});


Route::get('/scrum-poker', function () {
    return view('scrum-poker');
});