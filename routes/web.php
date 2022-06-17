<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;

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

Route::get('/',  [LibraryController::class, 'index']);

Route::get('/buku', [LibraryController::class, 'index'])->name('buku');


Route::get('/tambah', [LibraryController::class, 'tambah'])->name('tambah');
Route::resource('/layouts/tambah', TodoController::class);

Route::post('/insert', [LibraryController::class, 'insert'])->name('insert');

Route::get('/tampilkanData/{id}', [LibraryController::class, 'tampilkanData'])->name('tampilkanData');
Route::post('/updateData/{id}', [LibraryController::class, 'updateData'])->name('updateData');

Route::get('/delete/{id}', [LibraryController::class, 'delete'])->name('delete');

Route::get('/detail/{id}', [LibraryController::class, 'detail'])->name('detail');
