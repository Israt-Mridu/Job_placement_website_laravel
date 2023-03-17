<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JobController;


Route::get('/',[SiteController::class,'index'])->name('/');
Route::get('/job-details',[SiteController::class,'jobDetails'])->name('job-details');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function ()
{
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::get('/post-job',[AdminController::class,'postJob'])->name('post-job');
    Route::post('/new-job',[JobController::class,'newJob'])->name('new-job');
});
