<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'getHome'])->name('get-home');

Route::get('/hubungi-kami', [HomeController::class, 'getHubungi'])->name('get-hubungi');

Route::get('/tentang-kami', [HomeController::class, 'getTentang'])->name('get-tentang');

Route::group(['prefix' => 'layanan'],function(){
    Route::get('unit-gawat-darurat', [HomeController::class, 'getUGD'])->name('ugd');
    Route::get('rawat-inap', [HomeController::class, 'getri'])->name('ri');
    Route::get('rawat-jalan', [HomeController::class, 'getrj'])->name('rj');
    Route::get('poligigi', [HomeController::class, 'getPoli'])->name('poli');
    Route::get('vaksinasi', [HomeController::class, 'getv'])->name('v');
    Route::get('uji-laboratorium', [HomeController::class, 'getLab'])->name('lab');
});
