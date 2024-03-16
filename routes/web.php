<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

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

Route::get('/', [AppController::class, 'index'])->name('welcome');
Route::get('/detail/{id}', [AppController::class, 'showDetails'])->name('record_detail');
Route::get('/create', [AppController::class, 'create'])->name('record_create');
Route::post('/create_record', [AppController::class, 'postCreate'])->name('post_record_create');
Route::get('/update/{id}/edit', [AppController::class, 'update'])->name('record_update');
Route::patch('/update_record/{id}', [AppController::class, 'postUpdate'])->name('post_record_update');
Route::delete('/delete_record/{id}', [AppController::class, 'delete'])->name('record_delete');
