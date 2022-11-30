<?php

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

    Route::get('/login',[SiteController::class,'loginFrom'])->name('loginForm');
    Route::post('/login',[SiteController::class,'login'])->name('login');
});
