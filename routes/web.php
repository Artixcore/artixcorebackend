<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomePage\HomePageController;
use App\Http\Controllers\HomePage\WorkwithController;
use App\Http\Controllers\HomePage\ServiceController;
// use App\Http\Controllers\HomePageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [App\Http\Controllers\HomePageController::class, 'index']);

Auth::routes();

// Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/home', [DashboardController::class, 'index'])->name('home');

// Home Page

// Header
Route::get('home/create', [HomePageController::class, 'create'])->name('home.create');
Route::post('home/store', [HomePageController::class, 'store'])->name('home.store');

// Work With
Route::get('workwith/create', [WorkwithController::class, 'create'])->name('workwith.create');
Route::post('workwith/store', [WorkwithController::class, 'store'])->name('workwith.store');
Route::post('workwith/destroy/{id}', [WorkwithController::class, 'destroy'])->name('workwith.destroy');

// Services
Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
Route::post('/service/store', [ServiceController::class, 'store'])->name('service.store');
Route::get('/service/show/{id}', [ServiceController::class, 'show'])->name('service.show');
Route::delete('/service/destroy/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');

