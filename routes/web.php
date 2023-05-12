<?php

use App\Http\Controllers\ProfileController;
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
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
