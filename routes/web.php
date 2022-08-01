<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\MerchantController;
use App\Models\Paket;
use App\Models\Product;


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

Route::get('/', function () {
    $paket = Paket::all();
    $product = Product::all();
    return view('index', [
        'paket' => $paket,
        'produk' => $product
    ]);
});

Route::middleware(['auth'])->group(function () {
    //
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('/admin', AdminController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/confirm', ConfirmController::class);
    Route::resource('/paket', PaketController::class);
    Route::resource('/history', HistoryController::class);
    Route::resource('/merchant', MerchantController::class);
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::post('/send', [SendController::class, 'send']);
