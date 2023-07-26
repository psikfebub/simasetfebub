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

//Route::get('/home', [App\Http\Controllers\AdminController::class, 'index']);
//Route::get('/operator', [App\Http\Controllers\OperatorController::class, 'index']);

Route::get('/admin/home', function () {
    // Add your logic to handle the admin's home page here
    return view('admin/home');
})->name('admin.home');

// Route for the operator's home page
Route::get('/operator/home', function () {
    // Add your logic to handle the operator's home page here
    return view('operator.home');
})->name('operator.home');

// Route for the default home page for other users
// Route::get('/default/home', function () {
//     // Add your logic to handle the default home page here
//     return view('default.home');
// })->name('default.home');