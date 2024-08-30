<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\facultyController;
use App\Http\Controllers\companyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/movie',[MovieController::class,'index']);
Route::get('/faculty',[facultyController::class,'index']);
Route::get('/Company',[companyController::class,'index']);
