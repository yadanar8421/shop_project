<?php

use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Cart\LaterController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Backend\OrganizationController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

/**
 *  SHOP
 */
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/{product:slug}', [ShopController::class, 'show'])->name('shop.show');

/**
 *  CART
 */
Route::get('cart', [CartController::class, 'index'])->name('cart.index');
Route::post('cart', [CartController::class, 'store'])->name('cart.store');
Route::patch('cart/{product}', [CartController::class, 'update'])->name('cart.update');
Route::delete('cart/{product}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::post('cart/later/{product}', [LaterController::class, 'store'])->name('later.store');
Route::post('cart/move/{product}', [LaterController::class, 'moveToCart'])->name('later.moveToCart');
Route::patch('cart/later/{product}', [LaterController::class, 'update'])->name('later.update');
Route::delete('cart/later/{product}', [LaterController::class, 'destroy'])->name('later.destroy');

/**
 *  COUPONS
 */
Route::post('/coupon', [CouponController::class, 'store'])->name('coupon.store');
Route::delete('/coupon', [CouponController::class, 'destroy'])->name('coupon.destroy');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


/**
 * For Admin Route
 */

//  Route::middleware('guest')->group(function () {
//     Route::get('login', [AuthController::class, 'login'])->name('login');
// });

// Route::middleware('auth')->group(function () {
    // Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('admin')->group(function () {
        Route::resource('/organization', OrganizationController::class);
        // Route::get('/', [OrganizationController::class, 'index'])->name('organizations.index');
        // Route::get('/create', [OrganizationController::class, 'create'])->name('organizations.create');
        // Route::post('/', [OrganizationController::class, 'store'])->name('organizations.store');
        // Route::get('/{organization}/edit', [OrganizationController::class, 'edit'])->name('organizations.edit');
        // Route::put('/{organization}', [OrganizationController::class, 'update'])->name('organizations.update');
        // Route::delete('/{organization}', [OrganizationController::class, 'destroy'])->name('organizations.destroy');
    });
// });

