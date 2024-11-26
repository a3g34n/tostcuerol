<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.home');
});
Route::get('/hikayemiz', function () {
    return view('site.hikayemiz');
});

Route::get('/contact', function () {
    return view('site.contact');
});

Route::get('/franchise', function () {
    return view('site.franchise');
});


Route::get('/locations', function () {
    return view('site.locations');
});