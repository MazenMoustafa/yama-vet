<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

//Country
Route::get('countries', [Api\CountriesController::class, 'index']);
Route::get('get_whatsapp_number', [Api\AboutUsController::class, 'index']);
Route::middleware(['checkLanguage'])->group(function () {
    Route::post('check_client_exists', [Client\Auth\UserAuthController::class, 'checkClientExists']);

    Route::get('cities', [Client\CityController::class, 'cities']);
    Route::get('regions', [Client\CityController::class, 'regions']);

    
    Route::post('send_otp_password', [Client\Auth\UserAuthController::class, 'sendOtpPassword']);
    Route::post('send_otp_register', [Client\Auth\UserAuthController::class, 'sendOtpRegister']);
    Route::post('reset_password', [Client\Auth\ResetPasswordController::class, 'resetPassword']);
    
    Route::post('login', [Client\Auth\UserAuthController::class, 'login']);
    Route::post('register', [Client\Auth\UserAuthController::class, 'register']);

    //Banner
    Route::get('banners', [Client\BannerController::class, 'index']);
    
    //Products
    Route::get('products', [Client\ProductController::class, 'index']);
    Route::get('product_details', [Client\ProductController::class, 'details']);

    //Categories
    Route::get('categories', [Client\CategoryController::class, 'index']);
    Route::get('main_categories', [Client\CategoryController::class, 'mainCategories']);
    Route::get('category_sellers', [Client\CategoryController::class, 'categorySellers']);
    Route::get('categoryUnderSeller', [Client\CategoryController::class, 'categoryUnderSeller']);
    
Route::middleware(['auth:api'])->group(function () {

    Route::get('favourite_products', [Client\FavouriteProductController::class, 'index']);
    Route::post('favourite_products', [Client\FavouriteProductController::class, 'store']);
    Route::delete('favourite_products', [Client\FavouriteProductController::class, 'delete']);

    Route::post('edit_password', [Client\Auth\ResetPasswordController::class, 'editPassword']);

    Route::post('add_client_region', [Client\CityController::class, 'addClientRegion']);
    Route::post('select_main_address', [Client\CityController::class, 'updateMainAddress']);
    Route::post('edit_client_region', [Client\CityController::class, 'editClientRegion']);
    Route::delete('delete_client_region', [Client\CityController::class, 'deleteClientRegion']);


    //Discount
    Route::post('check_availabilty', [Client\DiscountController::class, 'checkAvailabilty']);

    //Order
    Route::get('myOrders', [Client\OrderController::class, 'index']);
    Route::get('order_tracking', [Client\OrderController::class, 'tracking']);
    Route::post('add_order', [Client\OrderController::class, 'store']);
    Route::post('cancel_order', [Client\OrderController::class, 'cancelOrder']);

    //Auth
    Route::get('logout', [Client\Auth\UserAuthController::class, 'logout']);

    //Profile
    Route::get('profile', [Client\ProfileController::class, 'index']);
    Route::delete('profile', [Client\ProfileController::class, 'destroy']);
    Route::post('edit_profile', [Client\ProfileController::class, 'update']);


});


});