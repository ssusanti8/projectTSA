<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopDetailController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KoleksiController;

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

Route::resource('/cart', CartController::class);

Route::resource('/checkout', CheckoutController::class);

Route::resource('/contact-us', ContactController::class);

Route::resource('/my-account', MyAccountController::class);

Route::resource('/service', ServiceController::class);

Route::resource('/shop', ShopController::class);

Route::resource('/shop-detail', ShopDetailController::class);

Route::resource('/wishlist', WishlistController::class);

Route::resource('/gallery', GalleryController::class);

Route::resource('/kategori', KategoriController::class);

Route::resource('/koleksi', KoleksiController::class);