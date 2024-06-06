<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ContentWriterController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::middleware('role:admin|superadmin')->group(function () {
        Route::apiResource('admin', AdminController::class);
    });
    Route::middleware(['auth:sanctum', 'is_content_writer'])->group(function () {
        Route::apiResource('content-writers', ContentWriterController::class);
    });

    Route::apiResource('user', UserController::class)->middleware('role:user');
});

// Content Writer Routes
