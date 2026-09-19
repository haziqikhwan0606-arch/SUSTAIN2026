<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\RegistrationController as AdminRegistrationController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Conference Pages
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/conference', [PageController::class, 'conference'])->name('conference');
Route::get('/tracks', [PageController::class, 'tracks'])->name('tracks');
Route::get('/speakers', [PageController::class, 'speakers'])->name('speakers');
Route::get('/symposium', [PageController::class, 'symposium'])->name('symposium');
Route::get('/awards', [PageController::class, 'awards'])->name('awards');
Route::get('/exhibition', [PageController::class, 'exhibition'])->name('exhibition');
Route::get('/impact', [PageController::class, 'impact'])->name('impact');
Route::get('/gsed', [PageController::class, 'gsed'])->name('gsed');
Route::get('/venue', [PageController::class, 'venue'])->name('venue');

/*
|--------------------------------------------------------------------------
| Registration Routes
|--------------------------------------------------------------------------
*/

Route::get('/register', [RegistrationController::class, 'create'])->name('register');
Route::post('/register', [RegistrationController::class, 'store'])->name('register.store');

/*
|--------------------------------------------------------------------------
| Admin Authentication Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::match(['get', 'post'], '/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

/*
|--------------------------------------------------------------------------
| Protected Admin Routes
|--------------------------------------------------------------------------
*/

Route::middleware('admin.auth')->prefix('admin')->group(function () {
    Route::get('/', fn () => redirect()->route('admin.registrations'));
    Route::get('/registrations', [AdminRegistrationController::class, 'index'])->name('admin.registrations');
});

/*
|--------------------------------------------------------------------------
| Legacy URL Compatibility Redirects
|--------------------------------------------------------------------------
*/

Route::redirect('/index.php', '/');
Route::redirect('/pages/conference.php', '/conference');
Route::redirect('/pages/tracks.php', '/tracks');
Route::redirect('/pages/speakers.php', '/speakers');
Route::redirect('/pages/symposium.php', '/symposium');
Route::redirect('/pages/awards.php', '/awards');
Route::redirect('/pages/exhibition.php', '/exhibition');
Route::redirect('/pages/impact.php', '/impact');
Route::redirect('/pages/gsed.php', '/gsed');
Route::redirect('/pages/venue.php', '/venue');
Route::redirect('/pages/register.php', '/register');
Route::redirect('/admin/login.php', '/admin/login');
Route::redirect('/admin/registrations.php', '/admin/registrations');
Route::redirect('/admin/logout.php', '/admin/logout');
