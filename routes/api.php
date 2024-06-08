<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\API\SuperAdminController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// General login for all users
Route::post('/login', [AuthController::class, 'login']);

// Role-specific logins
Route::post('/login/admin', [AuthController::class, 'loginAdmin']);
Route::post('/login/superadmin', [AuthController::class, 'loginSuperAdmin']);
Route::post('/login/seoadmin', [AuthController::class, 'loginSeoAdmin']);
Route::post('/login/contentwriter', [AuthController::class, 'loginContentWriter']);


Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// Route::middleware('auth:sanctum')->get('/profile', [UserController::class, 'profile']);

// API route for Superadmin Dashboard
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/superadmin/dashboard', [SuperAdminController::class, 'dashboard'])->middleware('can:access-superadmin-dashboard');
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('role:admin')->apiResource('admin-route', AdminController::class);
Route::middleware('role:superadmin')->apiResource('superadmin-route', SuperAdminController::class);
// Repeat for other roles
