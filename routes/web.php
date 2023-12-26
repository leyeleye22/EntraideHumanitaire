<?php

use App\Http\Controllers\BeneficiaireController;
use App\Http\Controllers\DonmaterielController;
use App\Http\Controllers\ProfileController;
use App\Models\Administrateur;
use App\Models\Beneficiare;
use App\Http\Controllers\ProjetController;
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

//Fast lan
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('beneficiaire', BeneficiaireController::class);
    Route::resource('projet', ProjetController::class);
});


Route::get('/footer', function () {
    return view('footer');
});

Route::get('/apropos', function () {
    return view('apropos.about');
});

Route::get('/ajouter/projet', function () {
    return view('Admin.AjoutProjet');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/projet',[ProjetController::class,'indexprojet']);
// route pour le CRUD des projet ici n'oublie pas de mettre le middleware pour la protégée

Route::get('admin/connect/association', function () {
    return view('ConnexionAdmin');
});
Route::get('admin/acceuil', function () {
    return view('Admin.AcceuilAdmin');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('where/don/Materiel/{projet}',[DonmaterielController::class,'create']);

Route::get('where/don/financier', function () {
    return view('dontfinancier');
});
Route::post('donmateriel',[DonmaterielController::class , "store"]);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
