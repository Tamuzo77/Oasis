<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DepotCVController;
use App\Http\Controllers\EmploiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\QuiSommesNousController;
use App\Http\Controllers\Admin\ActualiteController;
use App\Http\Controllers\Admin\PartenaireController;
use App\Http\Controllers\Admin\CategoryNewController;
use App\Http\Controllers\InscriptionFormationsController;

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

Route::get('/',[IndexController::class,'index']);
Route::get('/connexion',[ConnexionController::class,'connexion']);
Route::get('/quisommesnous',[QuiSommesNousController::class,'quisommesnous']);
Route::get('/inscriptionFormations',[InscriptionFormationsController::class,'inscriptionFormations']);
Route::get('/dépôtCV',[DepotCVController::class,'dépôtCV']);

/*---------------------------------------------------------------------------------*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware(['guest'])->prefix('espace_emplois')->as('emplois.')->group(function(){
    Route::resource('emplois', EmploiController::class);
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
