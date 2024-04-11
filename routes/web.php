<?php

use App\Http\Controllers\WEB\Auth\LoginController;
use App\Http\Controllers\WEB\Auth\LogoutController;
use App\Http\Controllers\WEB\Auth\RegisterController;
use App\Http\Controllers\WEB\Auth\ResetPasswordController;
use App\Http\Controllers\WEB\Auth\NewPasswordController;
use App\Http\Controllers\WEB\HomeController;
use App\Http\Controllers\WEB\DashboardController;
use App\Http\Controllers\WEB\Admin\ProductController;
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
    Route::get('/home/profil', function () {
        return view('home.profil.index');
    });

    Route::get('/registration-mitra', function () {
        return view('registration-mitra.index');
    });

    Route::get('/admin/dashboard/users', function () {
        return view('admin.pages.users.index');
    });

    Route::get('/admin/dashboard/users/add', function () {
        return view('admin.pages.users.add');
    });

    Route::get('/admin/dashboard/profil', function () {
        return view('admin.pages.profil.index');
    });

    Route::group(['middleware' => ['can:admin']], function () {
        Route::prefix('admin')->group(function () {
            Route::prefix('kelola')->group(function () {
                Route::resource('produk', ProductController::class);
            });
            Route::get('/dashboard', [DashboardController::class, 'admin']);
        });
    });
    Route::group(['middleware' => ['can:member']], function () {
        Route::get('/home', [DashboardController::class, 'member']);
    });
});
