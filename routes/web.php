<?php

use App\Http\Controllers\KostController;
use App\Http\Controllers\MemberCategoryController;
use App\Http\Controllers\MemberKelolaProdukController;
use App\Http\Controllers\MemberProductController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\WEB\Admin\CategoryController;
use App\Http\Controllers\WEB\Admin\User\UserUserController;
use App\Http\Controllers\WEB\Auth\LoginController;
use App\Http\Controllers\WEB\Auth\LogoutController;
use App\Http\Controllers\WEB\Auth\RegisterController;
use App\Http\Controllers\WEB\Auth\ResetPasswordController;
use App\Http\Controllers\WEB\Auth\NewPasswordController;
use App\Http\Controllers\WEB\DashboardController;
use App\Http\Controllers\WEB\Admin\ProductController;
use App\Http\Controllers\WEB\Admin\User\AdminKelolaProdukController;
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



Route::get('/',  [DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/home/produk', [DashboardController::class, 'produk']);
Route::middleware(['guest'])->group(function () {
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

        // Admin kelola pengguna
        Route::get('admin/pengguna/user', [UserUserController::class, 'index'])->name('user.index');
        Route::get('admin/pengguna/user/create', [UserUserController::class, 'create'])->name('user.create');
        Route::get('admin/pengguna/user/edit/{id}', [UserUserController::class, 'edit'])->name('user.edit');
        Route::post('admin/pengguna/user/store', [UserUserController::class, 'store'])->name('user.store');
        Route::post('admin/pengguna/user/update/{id}', [UserUserController::class, 'update'])->name('user.update');
        Route::get('admin/pengguna/user/delete/{id}', [UserUserController::class, 'delete'])->name('user.delete');

        // Admin kelola produk
        Route::get('admin/kelola/produk/edit/{id}', [AdminKelolaProdukController::class, 'edit'])->name('admin.produk.edit');
        Route::post('admin/kelola/produk/update/{id}', [AdminKelolaProdukController::class, 'update'])->name('admin.produk.update');

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

        Route::prefix('member')->group(function () {
            Route::prefix('kelola')->group(function () {
                Route::resource('produk', MemberProductController::class);
                Route::resource('kategori', MemberCategoryController::class);
            });
        });

        // Member kelola produk
        Route::get('member/kelola/produk/edit/{id}', [MemberKelolaProdukController::class, 'edit'])->name('member.produk.edit');
        Route::post('member/kelola/produk/update/{id}', [MemberKelolaProdukController::class, 'update'])->name('member.produk.update');

        // Member kelola mitra
        Route::get('member/kelola/mitra', [MitraController::class, 'index'])->name('mitra.index');
        Route::get('member/kelola/mitra/create', [MitraController::class, 'create'])->name('mitra.create');
        Route::post('member/kelola/mitra/store', [MitraController::class, 'store'])->name('mitra.store');
        Route::get('member/kelola/mitra/edit/{id}', [MitraController::class, 'edit'])->name('mitra.edit');
        Route::post('member/kelola/mitra/update/{id}', [MitraController::class, 'update'])->name('mitra.update');
        Route::delete('member/kelola/mitra/delete/{id}', [MitraController::class, 'destroy'])->name('mitra.delete');

        Route::middleware(['auth', 'check.member.status'])->group(function () {
            Route::get('/member/dashboard/transaksi', [DashboardController::class, 'transaksi'])->name('transaksi');
            Route::get('/member/dashboard', [DashboardController::class, 'member'])->name('member');
            Route::get('/member/dashboard/info', [DashboardController::class, 'info'])->name('info');
            Route::get('/member/dashboard/statistik', [DashboardController::class, 'statistik'])->name('statistik');
            Route::get('/member/kelola/kost', [KostController::class, 'index'])->name('member.kost');
            Route::get('/member/kelola/kost/create', [KostController::class, 'create'])->name('member.kost.create');
            Route::post('/member/kelola/kost/store', [KostController::class, 'store'])->name('member.kost.store');
            Route::get('/member/kelola/kost/edit/{id}', [KostController::class, 'edit'])->name('member.kost.edit');
            Route::post('/member/kelola/kost/update/{id}', [KostController::class, 'update'])->name('member.kost.update');
            Route::get('/member/kelola/kost/destroy/{id}', [KostController::class, 'destroy'])->name('member.kost.destroy');
        });
        // Route::get('/member/dashboard/transaksi', [DashboardController::class, 'transaksi'])->name('transaksi');
        // Route::get('/member/dashboard', [DashboardController::class, 'member'])->name('member');
        // Route::get('/member/dashboard/info', [DashboardController::class, 'info'])->name('info');
        // Route::get('/member/dashboard/statistik', [DashboardController::class, 'statistik'])->name('statistik');
        // Route::get('/member/kelola/produk', [KostController::class, 'index'])->name('member.produk');

        Route::get('/home', [DashboardController::class, 'dashboard']);
        Route::get('/home/registrasi', [DashboardController::class, 'register_member'])->name('home.registrasi');
        Route::post('/home/registrasi', [DashboardController::class, 'register_member_submit'])->name('home.registrasi.submit');
        Route::get('/home/produk/{id}', [DashboardController::class, 'produk']);
        Route::get('/home/cart', [DashboardController::class, 'cart'])->name('cart');
    });
});
