<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\GameController;

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

Route::get('/', function(){
    return view('home');
})->name('home');


Route::controller(TeamController::class)->group(function(){
    Route::get('teams', 'index')->name('teams.index');
    Route::get('teams/insert', 'insert')->name('teams.insert');
    Route::post('teams/store', 'store')->name('teams.store');
    Route::post('teams/selected', 'selected')->name('teams.selected');
    Route::get('teams/{team}/edit', 'edit')->name('teams.edit');
    Route::get('teams/{team}/view', 'view')->name('teams.view');
});

Route::put('teams/{team}', [TeamController::class, 'update'])->name('teams.update');
Route::delete('teams/{team}', [TeamController::class, 'destroy'])->name('teams.destroy');


Route::controller(PlayerController::class)->group(function(){
    Route::get('players', 'index')->name('players.index');
    Route::get('players/insert', 'insert')->name('players.insert');
    Route::post('players/store', 'store')->name('players.store');
    Route::get('players/{player}/edit', 'edit')->name('players.edit');
});

Route::put('players/{player}', [PlayerController::class, 'update'])->name('players.update');
Route::delete('players/{player}', [PlayerController::class, 'destroy'])->name('players.destroy');


Route::controller(GameController::class)->group(function(){
    Route::get('games', 'index')->name('games.index');
    Route::get('games/insert/{local_team}', 'insert')->name('games.insert');
    Route::post('games/store', 'store')->name('games.store');
    Route::post('games/selected', 'selected')->name('games.selected');
    Route::get('games/{game}/edit', 'edit')->name('games.edit');
});

Route::put('games/{game}', [GameController::class, 'update'])->name('games.update');
Route::delete('games/{game}', [GameController::class, 'destroy'])->name('games.destroy');



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
