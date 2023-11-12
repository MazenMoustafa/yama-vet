<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::post('login', [Admin\Auth\LoginController::class, 'login'])->name('login');

Route::middleware(['auth:driver-api'])->group(function () {
    Route::get('logout', [Admin\Auth\LoginController::class, 'logout'])->name('logout');


    //Profile
    Route::get('profile', [Admin\ProfileController::class, 'index']);
    Route::post('edit_profile', [Admin\ProfileController::class, 'update']);

    //Orders

    Route::get('orders', [Admin\OrderController::class, 'index']);
    Route::get('order_details', [Admin\OrderController::class, 'details']);
    Route::post('order_delivery', [Admin\OrderController::class, 'orderDelivery']);
    
});