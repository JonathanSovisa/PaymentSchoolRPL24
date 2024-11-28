<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;


Route::get('/', [PageController::class, 'main']);
Route::get('/signup', [PageController::class, 'signup']);
Route::get('/login', [PageController::class, 'login']);

    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/datamahasiswa', [PageController::class, 'datamahasiswa']);
    Route::get('/datatagihan', [PageController::class, 'datatagihan']);
    Route::get('/daftartransaksi', [PageController::class, 'daftartransaksi']);
    Route::get('/logtransaksi', [PageController::class, 'logtransaksi']);
    Route::get('/report', [PageController::class, 'report']);



    Route::get('/dashboardadmin', [PageController::class, 'dashboardadmin'])->name('dashboardadmin');
    Route::get('/admininstansi', [PageController::class, 'admininstansi']);
    Route::get('/daftarinstansi', [PageController::class, 'daftarinstansi']);
    Route::get('/daftartransaksiadmin', [PageController::class, 'daftartransaksiadmin']);
    Route::get('/logtransaksiadmin', [PageController::class, 'logtransaksiadmin']);



//Baca Data
Route::post('/login', [APIController::class, 'login']);
Route::get('/datamahasiswa ', [APIController::class, 'getMahasiswa']);
Route::get('/admininstansi', [APIController::class, 'getAdmin']);
Route::get('/daftarinstansi', [APIController::class, 'getInstansi']);

Route::get('/unauthorized', function () {
    return view('errors.unauthorized');
})->name('unauthorized');