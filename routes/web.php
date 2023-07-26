<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');
Route::get('/operator/home', [App\Http\Controllers\OperatorController::class, 'index'])->name('operator.home');
// Route::get('/operator/equipment', [App\Http\Controllers\OperatorController::class, 'readequipment'])->name('readequipment');
// Route::get('/admin/equipment', [App\Http\Controllers\AdminController::class, 'readequipment'])->name('readequipment');

Route::middleware(['auth'])->group(function () {
    // Semua rute di sini hanya dapat diakses oleh pengguna yang terautentikasi
    Route::get('/equipment', [App\Http\Controllers\EquipmentController::class, 'getEquipment'])->name('equipment');
    Route::get('/unit', [App\Http\Controllers\UnitController::class, 'getUnit'])->name('unit');
    // Dan rute lainnya...
});

