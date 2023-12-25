<?php

use App\Http\Controllers\DonateurController;
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

Route::get('/ajouter/projet', function () {
    return view('Admin.AjoutProjet');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/projet', function () {
    return view('Admin.Projet');
});
Route::get('admin/connect/association', function () {
    return view('ConnexionAdmin');
});
Route::get('admin/acceuil', function () {
    return view('Admin.AcceuilAdmin');
});
Route::controller(DonateurController::class)->group(function () {
    Route::post('/donprojet/materiel', 'donmateriel');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('where/don/Materiel/', function () {
    return view('donmateriel');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
