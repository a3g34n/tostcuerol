<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.home');
});
Route::get('/hikayemiz', function () {
    return view('site.hikayemiz');
});
