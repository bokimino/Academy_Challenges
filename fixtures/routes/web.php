<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ProfileController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'match.access'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
    
    Route::get('/admin/teams', [AdminController::class, 'indexTeams'])->name('admin.teams.indexTeams');
    Route::get('/admin/players', [AdminController::class, 'indexPlayers'])->name('admin.players.index');
    Route::get('/admin/players/create', [AdminController::class, 'createPlayer'])->name('admin.players.create');
    Route::post('/admin/players', [AdminController::class, 'storePlayer'])->name('admin.players.store');
    Route::get('/admin/players/{player}/edit', [AdminController::class, 'editPlayer'])->name('admin.players.edit');
    Route::put('/admin/players/{player}', [AdminController::class, 'updatePlayer'])->name('admin.players.update');
    Route::delete('/admin/players/{player}', [AdminController::class, 'destroyPlayer'])->name('admin.players.destroy');

    Route::get('/admin/teams', [AdminController::class, 'indexTeams'])->name('admin.teams.index');
    Route::get('/admin/teams/create', [AdminController::class, 'createTeam'])->name('admin.teams.create');
    Route::post('/admin/teams', [AdminController::class, 'storeTeam'])->name('admin.teams.store');
    Route::get('/admin/teams/{team}/edit', [AdminController::class, 'editTeam'])->name('admin.teams.edit');
    Route::put('/admin/teams/{team}', [AdminController::class, 'updateTeam'])->name('admin.teams.update');
    Route::delete('/admin/teams/{team}', [AdminController::class, 'destroyTeam'])->name('admin.teams.destroy');

    Route::get('/admin/matches', [AdminController::class, 'indexMatches'])->name('admin.matches.index');
    Route::get('/admin/matches/create', [AdminController::class, 'createMatch'])->name('admin.matches.create');
    Route::post('/admin/matches', [AdminController::class, 'storeMatch'])->name('admin.matches.store');
    Route::get('/admin/matches/{match}/edit', [AdminController::class, 'editMatch'])->name('admin.matches.edit');
    Route::put('/admin/matches/{match}', [AdminController::class, 'updateMatch'])->name('admin.matches.update');
    Route::delete('/admin/matches/{match}', [AdminController::class, 'destroyMatch'])->name('admin.matches.destroy');
     
});


Route::middleware(['auth'])->group(function () {
    Route::get('/matches', [GuestController::class, 'matches'])->name('matches.index');
});


require __DIR__.'/auth.php';
