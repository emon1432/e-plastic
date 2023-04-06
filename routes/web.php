<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BuyerController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\SellerController;
use App\Http\Controllers\Backend\SellRequestController;
use App\Http\Controllers\Backend\SellRequestManageController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.pages.index');
})->name('home');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.pages.dashboard');
    })->name('dashboard');

    Route::get('/user/profile', function () {
        return view('backend.pages.profile.show');
    })->name('profile.show');

    Route::get('/user/password/edit', function () {
        return view('backend.pages.profile.password');
    })->name('password.edit');

    //Admin Routes
    Route::resource('admin', AdminController::class);

    //Employee Routes
    Route::resource('employee', EmployeeController::class);

    //Seller Routes
    Route::resource('seller', SellerController::class);

    //Buyer Routes
    Route::resource('buyer', BuyerController::class);

    //Sell Request Routes 
    Route::post('sell-request/store', [SellRequestController::class, 'store'])->name('sell-request.store');
    Route::post('sell-request/update/{id}', [SellRequestController::class, 'update'])->name('sell-request.update');
    //price
    Route::get('sell-request/price/{id}', [SellRequestController::class, 'price'])->name('sell-request.price');
    //Sell Request Routes
    Route::get('sell-request/pending', [SellRequestController::class, 'pending'])->name('sell-request.pending');
    //accepted
    Route::get('sell-request/accepted', [SellRequestController::class, 'accepted'])->name('sell-request.accepted');
    //completed
    Route::get('sell-request/completed', [SellRequestController::class, 'completed'])->name('sell-request.completed');
    //rejected
    Route::get('sell-request/rejected', [SellRequestController::class, 'rejected'])->name('sell-request.rejected');
});