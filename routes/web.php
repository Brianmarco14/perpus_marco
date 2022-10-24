<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('buku', BukuCon::class)->middleware('admin');


Auth::routes();

Route::get('/home', [App\Http\Controllers\Admin\dasboardController::class, 'index'])->name('home');

// Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function() {
//     Route::get('dasboard', [App\Http\Controllers\Admin\dasboardController::class, 'index']);


//     // buku
//     Route::get('buku', [App\Http\Controllers\Admin\bukuController::class, 'index']);
//     Route::get('buku/create', [App\Http\Controllers\Admin\bukuController::class, 'create']);
// });
