<?php

use App\Http\Controllers\HomeController;
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
Route::prefix('/admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('admin.home');
    Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('admin.edit');
    Route::post('/update/{id}', [HomeController::class, 'update'])->name('admin.update');
    Route::get('/create', [HomeController::class, 'create'])->name('admin.create');
    Route::post('/create', [HomeController::class, 'store'])->name('admin.store');
    Route::get('/delete/{id}', [HomeController::class, 'delete'])->name('admin.delete');
    Route::get('/search', [HomeController::class, 'search'])->name('admin.search');
});



