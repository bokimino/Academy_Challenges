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


Route::get('/home', [UsersController::class, 'index'])->name('home');

Route::get('/form', [UsersController::class, 'showForm'])->name('form');

Route::post('/process-form', [UsersController::class, 'processForm'])->name('process-form');

Route::get('/info', [UsersController::class, 'showInfo'])->name('info');

Route::get('/clear-session', [UsersController::class, 'clearSession'])->name('clear-session');