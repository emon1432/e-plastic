<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\EmployeeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
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
});
