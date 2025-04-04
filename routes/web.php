<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('TestView');
});

Route::get('/teacher', function () {
    return view('AdminView.Teacher');
});

Route::get('/secretary', function () {
    return view('AdminView.Secretary');
});gi