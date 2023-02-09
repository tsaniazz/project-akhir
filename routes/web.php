<?php

use App\Models\DataDenda;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\DataDendaRequest;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterloginController;
use App\Http\Controllers\Admin\DatabukuController;
use App\Http\Controllers\Admin\DatadendaController;
use App\Http\Controllers\Anggota\AnggotaController;
use App\Http\Controllers\Chart\ChartbukuController;
use App\Http\Controllers\Admin\DataanggotaController;
use App\Http\Controllers\Admin\DatapeminjamController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Anggota\PinjamAnggotaController;
use App\Http\Controllers\Anggota\DatapeminjamananggotaController;
use App\Http\Controllers\Admin\DataDendaController as AdminDataDendaController;
use App\Http\Controllers\FrontController;

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

// Landing Page
Route::controller(FrontController::class)->group(function () {
    Route::get('/crownlibrary', 'index')->name('crown.index');
    Route::get('/coba', 'coba')->name('crown.coba');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/dashboard', [App\Http\Controllers\Dashboard\DashboardController::class, 'dashboard'])->name('dashboard');

// AKSES ADMIN = 1
Route::prefix('admin')->middleware(['auth', 'Isadmin'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('dashboard', 'dashboard')->name('dashboard');
        Route::get('admin', 'list_admin')->name('welcome.list.admin');
    });
    Route::controller(DatabukuController::class)->group(function () {
        Route::get('databuku', 'index')->name('databuku.index');
        Route::get('databuku/tambah', 'tambah')->name('databuku.tambah');
        Route::post('databuku/store', 'store')->name('databuku.store');
        Route::get('databuku/edit/{id}', 'edit')->name('databuku.edit');
        Route::put('databuku/update/{id}', 'update')->name('databuku.update');
        Route::get('databuku/destroy/{id}', 'destroy')->name('databuku.destroy');
    });
    Route::controller(DatapeminjamController::class)->group(function () {
        Route::get('peminjam', 'index')->name('peminjam.index');
        Route::get('peminjam/tambah', 'tambah')->name('peminjam.tambah');
        Route::post('peminjam/store', 'store')->name('peminjam.store');
        Route::get('peminjam/edit/{id}', 'edit')->name('peminjam.edit');
        Route::put('peminjam/update/{id}', 'update')->name('peminjam.update');
        Route::get('peminjam/destroy/{id}', 'destroy')->name('peminjam.destroy');
    });
    Route::controller(DataanggotaController::class)->group(function () {
        Route::get('anggota', 'index')->name('anggota.index');
        Route::get('anggota/tambah', 'tambah')->name('anggota.tambah');
        Route::post('anggota/store', 'store')->name('anggota.store');
        Route::get('anggota/edit/{id}', 'edit')->name('anggota.edit');
        Route::put('anggota/update/{id}', 'update')->name('anggota.update');
        Route::get('anggota/destroy/{id}', 'destroy')->name('anggota.destroy');
    });
    Route::controller(DatadendaController::class)->group(function () {
        Route::get('data/denda', 'index')->name('denda.index');
        Route::get('data/denda/tambah', 'tambah')->name('denda.tambah');
        Route::post('data/denda/store', 'store')->name('denda.store');
        Route::get('data/denda/edit/{id}', 'edit')->name('denda.edit');
        Route::put('data/denda/update/{id}', 'update')->name('denda.update');
        Route::get('data/denda/destroy/{id}', 'destroy')->name('denda.destroy');
    });
    Route::controller(ChartbukuController::class)->group(function () {
        Route::get('chart/buku', 'index')->name('chart.index');
    });
    // cara buat chart:
    // 1. buat controller chart dulu
    // 2.buat public function
    // 3. buat view()

});
// END AKSES ADMIN

// AKSES ANGGOTA = 2
Route::prefix('anggota')->middleware('auth', 'Isanggota')->group(function () {
    Route::controller(AnggotaController::class)->group(function () {
        Route::get('dashboard/anggota', 'index')->name('dashboard');
        Route::get('dashboard/anggota/data-buku', 'dataBuku')->name('data.buku.anggota');
        Route::get('dashboard/pinjam-buku', 'PinjamBuku')->name('pinjam.buku.anggota');
        Route::post('dashboard/pinjam-buku/tambah', 'PinjamBukuTambah')->name('tambah.pinjam.buku.anggota');
    });
    Route::controller(PinjamAnggotaController::class)->group(function () {
        Route::get('dashboard/anggota/data-buku-pinjam', 'dataPinjamBuku')->name('data.pinjam.buku.anggota');
    });
});
