<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\CompteRenduController;
use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\InscriptionController;


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


Route::get('/inscription', [InscriptionController::class, 'showRegistrationForm'])->name('register');
Route::post('/inscription', [InscriptionController::class, 'traiterInscription']);


Route::get('/connexion', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/connexion', [LoginController::class, 'login']);



// Route::middleware(['auth'])->group(function () {
//     Route::resource('projets', ProjetController::class);
//     Route::resource('taches', TacheController::class);
//     Route::resource('equipes', EquipeController::class);
//     Route::resource('comptes_rendus', CompteRenduController::class);
// });



// Route::middleware(['auth'])->group(function () {
//     Route::get('/taches', [TacheController::class, 'index'])->name('taches.index');
//     Route::get('/taches/create', [TacheController::class, 'create'])->name('taches.create');
//     Route::post('/taches', [TacheController::class, 'store'])->name('taches.store');
//     Route::get('/taches/{id}/edit', [TacheController::class, 'edit'])->name('taches.edit');
//     Route::put('/taches/{id}', [TacheController::class, 'update'])->name('taches.update');
//     Route::delete('/taches/{id}', [TacheController::class, 'destroy'])->name('taches.destroy');
// });


// Route::middleware(['auth'])->group(function () {
//     Route::get('/equipes', [EquipeController::class, 'index'])->name('equipes.index');
//     Route::get('/equipes/create', [EquipeController::class, 'create'])->name('equipes.create');
//     Route::post('/equipes', [EquipeController::class, 'store'])->name('equipes.store');
//     Route::get('/equipes/{id}/edit', [EquipeController::class, 'edit'])->name('equipes.edit');
//     Route::put('/equipes/{id}', [EquipeController::class, 'update'])->name('equipes.update');
//     Route::delete('/equipes/{id}', [EquipeController::class, 'destroy'])->name('equipes.destroy');
// });



// Route::get('/administrateur', [AdministrateurController::class, 'index'])->name('administrateur.index');
// Route::get('/administrateur/create', [AdministrateurController::class, 'create'])->name('administrateur.create');
// Route::post('/administrateur', [AdministrateurController::class, 'store'])->name('administrateur.store');
// Route::get('/administrateur/{id}/edit', [AdministrateurController::class, 'edit'])->name('administrateur.edit');
// Route::put('/administrateur/{id}', [AdministrateurController::class, 'update'])->name('administrateur.update');
// Route::get('/administrateur/{id}', [AdministrateurController::class, 'show'])->name('administrateur.show');
// Route::delete('/administrateur/{id}', [AdministrateurController::class, 'destroy'])->name('administrateur.destroy');
