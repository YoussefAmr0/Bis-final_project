<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.welcome');
});
Route::get('/home', function () {
    return view('frontend.welcome');
});

Route::get('login', [App\Http\Controllers\Auth\AuthController::class,'index'])->name('login');
Route::get('registration', [App\Http\Controllers\Auth\AuthController::class,'registration'])->name('registration');
Route::get('registration/client', [App\Http\Controllers\Auth\AuthController::class,'registration_client'])->name('registration_client');
Route::get('registration/freelancer', [App\Http\Controllers\Auth\AuthController::class,'registration_freelancer'])->name('registration_freelancer');
Route::get('logout', [App\Http\Controllers\Auth\AuthController::class,'logout'])->name('logout');
Route::post('validate_registration_client', [App\Http\Controllers\Auth\AuthController::class,'validate_registration_client'])->name('sample.validate_registration_client');
Route::post('validate_registration_freelancer', [App\Http\Controllers\Auth\AuthController::class,'validate_registration_freelancer'])->name('sample.validate_registration_freelancer');
Route::post('validate_login', [App\Http\Controllers\Auth\AuthController::class,'validate_login'])->name('sample.validate_login');

##########################################################################################################
