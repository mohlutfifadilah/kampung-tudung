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
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\TermasukController;
use App\Models\About;
use App\Models\Gallery;
use App\Models\Paket;
use App\Models\Product;
use App\Models\Termasuk;
use Illuminate\Support\Facades\DB;



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
    $about = About::first();
    $product = Product::all();
    $galeri = Gallery::all();
    $include = Termasuk::all();
    $merchant = DB::table('merchant')->groupBy('username')->paginate(10);
    return view('index', [
        'paket' => $paket,
        'about' => $about,
        'gallery' => $galeri,
        'produk' => $product,
        'include' => $include,
        'merchant' => $merchant,
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
    Route::resource('/about', AboutController::class);
    Route::resource('/gallery', GalleryController::class);
    Route::resource('/video', VideoController::class);
    Route::resource('/termasuk', TermasukController::class);
});


Route::resource('/profile', ProfileController::class);
Route::resource('/password', PasswordController::class);
Route::resource('/merchant', MerchantController::class);
Route::resource('/toko', TokoController::class);


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::post('/send', [SendController::class, 'send']);
Route::get('/kirim_email', [App\Http\Controllers\MailController::class, 'kirim']);
