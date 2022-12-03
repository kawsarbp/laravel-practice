<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\FrontEnd\SiteController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/',[SiteController::class,'index'])->name('index');
Route::get('/post',[SiteController::class,'singlePost'])->name('single-post');


//User Login Register Route
Route::prefix('/user')->name('user.')->group(function (){
    Route::get('/register',[SiteController::class,'showRegisterFrom'])->name('registerForm');
    Route::post('/register',[SiteController::class,'registration'])->name('registration');

    Route::get('/logout',[SiteController::class,'logout'])->name('logout');

    Route::get('/login',[SiteController::class,'loginFrom'])->name('loginForm');
    Route::post('/login',[SiteController::class,'login'])->name('login');
});
//dashboard routes
Route::prefix('/admin')->name('admin.')->group(function (){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    //category routes
    Route::prefix('/category')->name('category.')->group(function (){
        Route::get('/',[CategoryController::class,'index'])->name('index');
        Route::get('/create',[CategoryController::class,'create'])->name('create');
        Route::post('/store',[CategoryController::class,'store'])->name('store');
        Route::delete('/{id}',[CategoryController::class,'destroy'])->name('destroy');
    });

});
