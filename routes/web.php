<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SuratController;
use Illuminate\Support\Facades\Route;

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

Route::get('/pembalap', [PostController::class, 'home']);
Route::get('/akun', [AkunController::class, 'index']);
Route::get('/hero', [HeroController::class, 'index']);
Route::post('/pembalap', [PostController::class, 'add'])->name('data.add');

// Surat
Route::get('/', [SuratController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/tambah', [SuratController::class, 'tambah']);
Route::post('/transaksi', [SuratController::class, 'store'])->name('surat.store');
Route::post('/hapus/{id}', [SuratController::class, 'destroy'])->name('surat.destroy');
Route::get('/lihat/{id}', [SuratController::class, 'lihat'])->name('surat.lihat');
Route::get('/download/{id}', [SuratController::class, 'download'])->name('surat.dw');
Route::get('/cari', [SuratController::class, 'cari'])->name('surat.cari');;
