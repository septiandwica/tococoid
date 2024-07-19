<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
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
Route::get('blog/{slug}', [FrontEndController::class, 'blog_detail'])->name('blog.detail');
Route::get("contact", [FrontEndController::class,'contact'])->name('contact');



Route::controller(AuthController::class)->group(    function () {
    
    Route::get('login', 'login')->name('login');

    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});


Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get("dashboard", [DashboardController::class,"dashboard"])->name('dashboard');

    Route::get('dashboard/general-settings/edit', [GeneralController::class, 'generalsettings'])->name('dashboard/general-settings/edit');
    Route::post('dashboard/general-settings/edit', [GeneralController::class, 'generalsettings_action'])->name('dashboard/frontendpage/edit');

    Route::get('dashboard/product/list', [ProductController::class, 'product'])->name('dashboard/product/list');
    Route::get('dashboard/product/add', [ProductController::class, 'add_product'])->name('dashboard/product/add');
    Route::post('dashboard/product/add', [ProductController::class, 'add_product_action'])->name('dashboard/product/add');
    Route::get('dashboard/product/edit/{id}', [ProductController::class, 'edit_product'])->name('dashboard/product/edit');
    Route::post('dashboard/product/edit/{id}', [ProductController::class, 'edit_product_action'])->name('dashboard/product/edit');
    Route::get('dashboard/product/delete/{id}', [ProductController::class, 'delete_product'])->name('dashboard/product/delete');

    Route::get('dashboard/blog/list', [BlogController::class, 'blog'])->name('dashboard/blog/list');
    Route::get('dashboard/blog/add', [BlogController::class, 'add_blog'])->name('dashboard/blog/add');
    Route::post('dashboard/blog/add', [BlogController::class, 'add_blog_action'])->name('dashboard/blog/add');
    Route::get('dashboard/blog/edit/{id}', [BlogController::class, 'edit_blog'])->name('dashboard/blog/edit');
    Route::post('dashboard/blog/edit/{id}', [BlogController::class, 'edit_blog_action'])->name('dashboard/blog/edit');
    Route::get('dashboard/blog/delete/{id}', [BlogController::class, 'delete_blog'])->name('dashboard/blog/delete');
    
});

Route::group(['middleware' => ['auth', 'developer']], function () {



});