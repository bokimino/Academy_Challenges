<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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



Route::get('/', [PageController::class, 'show'])->name('home')->defaults('page', 'home');
Route::get('/about', [PageController::class, 'show'])->name('about')->defaults('page', 'about');
Route::get('/blog', [PageController::class, 'show'])->name('blog')->defaults('page', 'blog');
Route::get('/contact', [PageController::class, 'show'])->name('contact')->defaults('page', 'contact');
