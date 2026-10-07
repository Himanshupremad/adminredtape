<?php

use App\Http\Controllers\backend\adminController;
use App\Http\Controllers\frontend\loginController;
use App\Http\Controllers\frontend\registerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.redtape');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', [adminController::class, 'adminpage'])->name('admin');
    Route::get('logout', [adminController::class, 'logout'])->name('logouts');
});



Route::group(['middleware' => 'guest'], function () {

    Route::get('register', [registerController::class, 'regpage'])->name('registers');
    Route::post('register', [registerController::class, 'register'])->name('register');
    Route::get('login', [loginController::class, 'login'])->name('logins');
    Route::post('login', [loginController::class, 'loginpage'])->name('login');
});
