<?php

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

Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('index');
Route::get('/main', fn() => view('main'))->name('main');
Route::get('/contacts', fn() => view('contacts'))->name('contacts');
Route::get('/about', fn() => view('about'))->name('about');

Route::get('/posts/create', [\App\Http\Controllers\PostController::class, 'create']);
Route::get('/posts/update', [\App\Http\Controllers\PostController::class, 'update']);
Route::get('/posts/delete', [\App\Http\Controllers\PostController::class, 'delete']);
Route::get('/posts/first-or-create', [\App\Http\Controllers\PostController::class, 'firstOrCreate']);
Route::get('/posts/update-or-create', [\App\Http\Controllers\PostController::class, 'updateOrCreate']);
