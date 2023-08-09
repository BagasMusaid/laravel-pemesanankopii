<?php

use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;
use App\Http\Controllers\beliController;
use App\Http\Controllers\kopiController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\utamaController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\pesananController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\dashbordController;
use App\Http\Controllers\registerController;

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

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [loginController::class, 'index'])->name('login');
    Route::post('/login', [loginController::class, 'authenticate']);
    Route::get('/register', [registerController::class, 'index']);
    Route::post('/register', [registerController::class, 'store']);
});
Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [loginController::class, 'logout']);
});
Route::middleware('userAkses:admin')->group(function () {
    Route::prefix('kopi')->group(function () {
        Route::get('/', [kopiController::class, 'index']);
        Route::put('/{id}/edit', [kopiController::class, 'edit']);
        Route::delete('/{id}/delete', [kopiController::class, 'destroy']);
    });
    Route::prefix('pesanan')->group(function () {
        Route::get('/', [pesananController::class, 'index']);
    });
    Route::get('edit/fotoBarang/{id}', [kopiController::class, 'update']);
    Route::put('edit/fotoBarang/{id}', [kopiController::class, 'editGambar']);
    Route::get('/dashbord', [dashbordController::class, 'index']);
    Route::post('/TambahKopi', [kopiController::class, 'store']);
});

Route::post('/menu', [kopiController::class, 'store']);

Route::get('/menu/cappucino', [produkController::class, 'index']);
Route::post('/menu/cappucino', [produkController::class, 'store']);

route::get('/', [utamaController::class, 'index']);

Route::get('/aboute', function () {
    return view('about', [
        'jud' => 'about',
    ]);
});
Route::get('pesan/{id}', [beliController::class, 'index']);
Route::post('pesan/{id}', [beliController::class, 'pesan']);
Route::post('beli/{id}', [menuController::class, 'pesan']);

Route::prefix('checkout')->group(function () {
    Route::resource('/', checkoutController::class);
    Route::get('/{id}/edit', [checkoutController::class, 'edit']);
    Route::delete('/{id}/delete', [checkoutController::class, 'destroy']);
    Route::put('/{id}/edit', [checkoutController::class, 'update']);
});

Route::get('checkout-konfirmasi', [beliController::class, 'konfirmasi']);


Route::prefix('profile')->group(function () {
    Route::get('/', [profileController::class, 'index']);
    Route::put('/{id}/edit', [profileController::class, 'edit']);
    Route::post('/{id}', [profileController::class, 'store']);
});

Route::prefix('menu')->group(function () {
    Route::get('/', [menuController::class, 'index']);
});
