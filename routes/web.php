<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomePageController;

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
Route::get('login',[UsersController::class,'index'])->name('login');
Route::post('login',[UsersController::class,'login']);
Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('logout',[UsersController::class,'logout']);

    // Route::get('/', function () {
    //     return view('dashboard.index');
    // });
    Route::get('/', [HomePageController::class, 'edit'])->name('dashboard.index');
    Route::post('/', [HomePageController::class, 'update'])->name('admin.home.update');
    // Route::get('/makaleler', [ArticleController::class,'index'])->name('dashboard.makaleler');;
    // Route::get('/makaleler/add/{id?}', [ArticleController::class,'create']);
    // Route::get('/makaleler/delete/{id?}', [ArticleController::class,'destroy']);
    // Route::get('/makaleler/status/{id?}', [ArticleController::class,'status']);
    // Route::post('/makaleler/add', [ArticleController::class,'store']);
    
    // Route::get('/pages', [PagesController::class,'index'])->name('dashboard.pages');;
    // Route::get('/pages/add/{id?}', [PagesController::class,'create']);
    // Route::get('/pages/delete/{id?}', [PagesController::class,'destroy']);
    // Route::get('/pages/status/{id?}', [PagesController::class,'status']);
    // Route::post('/pages/add', [PagesController::class,'store']);

    // Route::get('/aboneler', [SubscriberController::class, 'index'])->name('dashboard.aboneler');
    // Route::get('/aboneler/delete/{id}', [SubscriberController::class, 'destroy']);
    // Route::get('/settings', [SettingsController::class, 'settingsGeneral'])->name('dashboard.settings_general');
    // Route::post('/settings', [SettingsController::class, 'store']);
    
    // Route::get('/menu', [MenusController::class, 'index'])->name('dashboard.menus');
    // Route::get('/menu/add/{id?}', [MenusController::class,'create']);
    // Route::post('/menu/add', [MenusController::class,'store']);
    // Route::get('/menu/delete/{id?}', [MenusController::class,'destroy']);

});
