<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('admin')->namespace('App\Http\Controllers\admin')->group(function () {
    Route::match(['get', 'post'], 'login', [AdminController::class, 'login']);

    Route::middleware('admin')->group(function () {
        Route::get('dashboard', [AdminController::class, 'dashboard']);
        Route::match(['get', 'post'], 'update-admin-password', [AdminController::class, 'updateAdminPassword']);
        Route::match(['get', 'post'], 'update-admin-details', [AdminController::class, 'updateAdminDetails']);
        Route::post('check-current-password', [AdminController::class, 'checkCurrentPassword']);

        Route::match(['get', 'post'], 'update-vendor-details/{slug}', [AdminController::class, 'updateVendorDetails']);
    });

    Route::get('logout', [AdminController::class, 'logout']);
});


