<?php

use App\Http\Controllers\backend\adminController;
use App\Http\Controllers\backend\bannerController;
use App\Http\Controllers\backend\categoryController;
use App\Http\Controllers\backend\slideController;
use App\Http\Controllers\backend\trendController;
use App\Http\Controllers\backend\videoController;
use App\Http\Controllers\frontend\loginController;
use App\Http\Controllers\frontend\registerController;
use App\Models\banner;
use App\Models\category;
use App\Models\slidebanner;
use App\Models\trending;
use App\Models\video;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $banners = banner::all();
    $categorys = category::all();
    $trends = trending::all();
    $sliders = slidebanner::all();
    $shows = video::all();
    return view('frontend.redtape', compact('banners', 'categorys', 'trends', 'sliders', 'shows'));
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


Route::get('banner', [bannerController::class, 'banners'])->name('banner');
Route::post('banner', [bannerController::class, 'bannerpage'])->name('banner.store');
Route::get('bannerlist', [bannerController::class, 'listpage'])->name('listbanner');


route::get('category', [categoryController::class, 'categorys'])->name('category');
route::post('category', [categoryController::class, 'categorypage'])->name('category.store');
route::get('categorylist', [categoryController::class, 'catlist'])->name('listcat');


Route::get('slidebanner', [slideController::class, 'slidebanner'])->name('slidebanner');
Route::post('slidebanner', [slideController::class, 'slidepage'])->name('slide.store');
Route::get('slidebannerlist', [slideController::class, 'slidelist'])->name('slidelist');




Route::get('video', [videoController::class, 'videos'])->name('vdcreate');
Route::post('video', [videoController::class, 'videopage'])->name('video.store');
Route::get('videolist', [videoController::class, 'videolist'])->name('vdlist');


// Route::get('product/{id}/edit', [trendController::class, 'edit'])->name('trending.edit');

// Trending Module CRUD Routes
Route::get('trending/create', [trendController::class, 'trendings'])->name('trending.create');
Route::post('trending/store', [trendController::class, 'trendingpage'])->name('trending.store');
Route::get('trending/list', [trendController::class, 'trendlist'])->name('trendlist');

Route::get('product/{id}/edit', [trendController::class, 'edit'])->name('trending.edit');
Route::put('product/{id}', [trendController::class, 'update'])->name('trendings.update');
Route::delete('product/{id}', [trendController::class, 'destroy'])->name('trending.destroy');


Route::get('banner/{id}/edit', [bannerController::class, 'edit'])->name('banner.edit');
Route::post('banner/{id}', [bannerController::class, 'update'])->name('banners.update');
Route::delete('banner/{id}', [bannerController::class, 'destroy'])->name('banner.destroy');
