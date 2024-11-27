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
Route::get('/gallery', function () {
    return view('site.gallery');
});

Route::get('/franchise', function () {
    return view('site.franchise');
});


Route::get('/locations', function () {
    return view('site.locations');
});

Route::get('/social', function () {
    return view('site.social'); 
});

Route::get('/blog', function () {
    return view('site.blog'); 
});

Route::get('/lezzetsirri', function () {
    return view('site.secret'); 
});