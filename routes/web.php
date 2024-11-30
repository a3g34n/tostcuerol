<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
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

Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send-email');
Route::post('/send-contact-email', [EmailController::class, 'sendContactEmail'])->name('send-contact-email');
Route::post('/subscribe', [EmailController::class, 'subscribe'])->name('newsletter.subscribe');
