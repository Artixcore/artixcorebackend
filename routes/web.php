<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SocialLinkController;
use App\Http\Controllers\IndexHeaderController;
use App\Http\Controllers\FrontendMenuController;

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
// routes/web.php




Route::get('/', function () {    return view('frontend.index');});
Route::get('/admins', function () {    return view('admin.dashboard.index');});


Route::get('/header', [FrontendMenuController::class, 'showHeaderMenu']);

Auth::routes();


Route::resource('social_links', SocialLinkController::class);

Route::resource('settings', SettingController::class);

Route::resource('menus', MenuController::class)->except(['show']);

Route::resource('index_headers', IndexHeaderController::class);

Route::resource('pages', PageController::class)->except(['destroy']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
