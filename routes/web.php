<?php

//use App\Http\Controllers\UserController;
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

Route::middleware(['splade'])->group(function () {
    Route::get('/', fn () => view('home'))->name('home');
    Route::get('/docs', fn () => view('docs'))->name('docs');
//
//    Route::get('/user/{user}', [UserController::class, 'show'])
//         ->name('user.show');
//
//    Route::get('/user/{user}/edit', [UserController::class, 'edit'])
//         ->name('user.edit');
//
//    Route::put('/user/{user}', [UserController::class, 'update'])
//         ->name('user.update');
});
