<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\ApplicationController;

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

Route::get('chat', [App\Http\Controllers\MessageController::class,'startChat'])->name('start_chat');
Route::post('chat', [App\Http\Controllers\MessageController::class,'startChat'])->name('start_chat');
Route::get('chats', [App\Http\Controllers\MessageController::class, 'index'])->name('chats.index');
Route::get('chat/{email}', [App\Http\Controllers\MessageController::class, 'create'])->name('chats.create');
Route::post('chat/{email}', [App\Http\Controllers\MessageController::class, 'store'])->name('chats.store');

##########################################################################################################
Route::get('/post-job', [JobController::class, 'showForm'])->name('post-job-form');
Route::post('/store-job', [JobController::class, 'store'])->name('store-job');
Route::get('/Profile', [JobController::class, 'portfolio'])->name('Profile');
Route::delete('/projects/{id}', [JobController::class, 'destroy'])->name('projects.destroy');
##########################################################################################################
Route::get('/find-freelancer', [FreelancerController::class, 'showfreelancers'])->name('show-freelancers');
Route::get('/add-project', [FreelancerController::class, 'AddProduct'])->name('add-project');
Route::post('/projects', [FreelancerController::class, 'store'])->name('projects.store');
Route::get('/find-Job', [FreelancerController::class, 'findJob'])->name('find.Job');
Route::get('/project/{projectId}', [FreelancerController::class, 'viewProject'])->name('view.project');
##########################################################################################################

