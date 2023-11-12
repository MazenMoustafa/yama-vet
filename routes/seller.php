<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::prefix('seller')->name('seller.')->group(function () {
 
    Route::group(['middleware' => ['guest:seller']], function(){ 
        Route::view('login','seller.auth.login');
        Route::post('login', [Seller\Auth\LoginController::class, 'login'])->name('login');
    });
    
    Route::group(['middleware' => ['auth:seller']], function(){ 
        Route::view('home','seller.home')->name('home');
        Route::get('logout', [Seller\Auth\LoginController::class, 'logout'])->name('logout');
    
        //Product
        Route::resource('product', Seller\ProductController::class);
        Route::post('edit_product', [Seller\ProductController::class, 'update'])->name('product.update');

    
        //Order 
        Route::get('orders', [Seller\OrderController::class, 'index'])->name('order.index');
        Route::get('order/{id}', [Seller\OrderController::class, 'details'])->name('order.details');
    
    });
});

