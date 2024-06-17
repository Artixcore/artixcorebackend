<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SocialLinkController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\IndexHeaderController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\FrontendMenuController;
use App\Http\Controllers\FrontendPageController;


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




Route::get('/', function () {
    return view('frontend.index');
});


// Route to show pages by slug
Route::get('menu/{slug}', [FrontendPageController::class, 'show'])->name('frontend.pages.show');

// Route to handle incorrect URLs
Route::fallback(function () {
    return view('404');
});

Auth::routes();

Route::resource('blogs', BlogController::class);

Route::resource('faqs', FaqController::class);

Route::resource('portfolios', PortfolioController::class);

Route::resource('testimonials', TestimonialController::class);

Route::resource('services', ServiceController::class);

Route::get('admins', [AdminController::class, 'index'])->name('admins');

Route::resource('uploads', UploadController::class);

Route::resource('social_links', SocialLinkController::class);

Route::resource('settings', SettingController::class);

Route::resource('menus', MenuController::class)->except(['show']);

Route::resource('index_headers', IndexHeaderController::class);

Route::resource('pages', PageController::class)->except(['destroy']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
