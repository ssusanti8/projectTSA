<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DiskonController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\ReservasikuController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/about', AboutController::class);

Route::resource('/', HomepageController::class);

Route::resource('/diskon', DiskonController::class);

Route::get('/diskonku', [App\Http\Controllers\DiskonController::class, 'diskon'])->name('diskon');

Route::resource('/galeri', GaleriController::class);

Route::get('/galeriku', [App\Http\Controllers\GaleriController::class, 'galeri'])->name('galeri');

Route::resource('/menu', MenuController::class);

Route::get('/menuku', [App\Http\Controllers\MenuController::class, 'menu'])->name('menu');

Route::resource('/reservasi', ReservasiController::class);

Route::resource('/reservasiku', ReservasikuController::class);

// Route::get('/reservasiku', [App\Http\Controllers\ReservasiController::class, 'reservasi'])->name('reservasi');

Route::get('/cetak_pdf', [App\Http\Controllers\ReservasikuController::class, 'cetak_pdf'])->name('cetak_pdf');


// ADMIN
Route::get('/manage', function () {
    return view('manage.index', [
        'title' => 'Manage'
    ]);
})->middleware('superadmin');

Route::resource('/user', UserController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});