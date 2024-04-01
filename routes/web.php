<?php

use App\Http\Controllers\WEB\Admin\CategoryController;
use App\Http\Controllers\WEB\Auth\LoginController;
use App\Http\Controllers\WEB\Auth\LogoutController;
use App\Http\Controllers\WEB\Auth\RegisterController;
use App\Http\Controllers\WEB\Auth\ResetPasswordController;
use App\Http\Controllers\WEB\Auth\NewPasswordController;
use App\Http\Controllers\WEB\DashboardController;
use App\Http\Controllers\WEB\Admin\ProductController;
use App\Http\Controllers\WEB\Admin\User\UserMemberController;
use App\Http\Controllers\WEB\Admin\Wilayah\WilayahController;
use App\Http\Controllers\WEB\Auth\VerificationController;
use Illuminate\Support\Facades\Route;

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
    Route::get('/', function () {
        return view('/home/index');
    });
    Route::prefix('login')->name('login.')->group(function () {
        Route::get('/', [LoginController::class, 'index'])
            ->name('index');
        Route::post('/', [LoginController::class, 'process'])
            ->name('process');
    });

    Route::prefix('register')->name('register.')->group(function () {
        Route::get('/', [RegisterController::class, 'index'])
            ->name('index');
        Route::post('/', [RegisterController::class, 'process'])
            ->name('process');
    });

    Route::prefix('reset-password')->name('reset-password.')->group(function () {
        Route::get('/', [ResetPasswordController::class, 'index'])
            ->name('index');
        Route::post('/', [ResetPasswordController::class, 'process'])
            ->name('process');
    });

    Route::prefix('new-password')->name('new-password.')->group(function () {
        Route::get('/', [NewPasswordController::class, 'index'])
            ->name('index');
        Route::post('/', [NewPasswordController::class, 'process'])
            ->name('process');
    });

    Route::get('/verification', VerificationController::class)
        ->name('verification');
});

Route::middleware(['auth'])->name('web.')->group(function () {
    Route::get('/logout', LogoutController::class)
        ->name('auth.logout');
});

Route::middleware(['autentikasi'])->group(function () {
    Route::group(['middleware' => ['can:admin']], function () {
        Route::prefix('admin')->group(function () {
            Route::get('/home', function () {
                return view('home.index');
            });
            Route::prefix('wilayah')->group(function () {
                Route::get('/getKota', [WilayahController::class, 'getKota']);
                Route::get('/getKecamatan', [WilayahController::class, 'getKecamatan']);
            });
            Route::prefix('pengguna')->group(function () {
                Route::resource('member', UserMemberController::class);
            });
            Route::prefix('kelola')->group(function () {
                Route::resource('produk', ProductController::class);
                Route::resource('kategori', CategoryController::class);
            });
            Route::get('/dashboard', [DashboardController::class, 'admin']);
        });
    });
    Route::group(['middleware' => ['can:member']], function () {
        Route::get('/home', [DashboardController::class, 'member']);
    });
});
