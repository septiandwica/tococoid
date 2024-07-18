<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get("/", [FrontEndController::class,"index"])->name('home');
Route::get("about", [FrontEndController::class,'about'])->name('about');
Route::get("product", [FrontEndController::class,'product'])->name('product');
Route::get('product/{slug}', [FrontEndController::class, 'product_detail'])->name('product.detail');
Route::get("blog", [FrontEndController::class,'blog'])->name('blog');
Route::get('blog/{slug}', [FrontEndController::class, 'blog'])->name('blog.detail');
Route::get("contact", [FrontEndController::class,'contact'])->name('contact');



Route::controller(AuthController::class)->group(    function () {
    
    Route::get('login', 'login')->name('login');

    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});


Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get("dashboard", [DashboardController::class,"dashboard"])->name('dashboard');

    Route::get('dashboard/product/list', [ProductController::class, 'product'])->name('dashboard/product/list');

    Route::get('dashboard/product/add', [ProductController::class, 'add_product'])->name('dashboard/product/add');
    Route::post('dashboard/product/add', [ProductController::class, 'add_product_action'])->name('dashboard/product/add');
    
});
Route::group(['middleware' => ['auth', 'developer']], function () {


    Route::get('dashboard/general-settings/edit', [GeneralController::class, 'generalsettings'])->name('dashboard/general-settings/edit');
    Route::post('dashboard/general-settings/edit', [GeneralController::class, 'generalsettings_action'])->name('dashboard/frontendpage/edit');

});