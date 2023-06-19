<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\EmploiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ActualiteController;
use App\Http\Controllers\Admin\PartenaireController;
use App\Http\Controllers\Admin\CategoryNewController;

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


/*---------------------------------------------------------------------------------*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('can:admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('partenaires&services',[AdminController::class, 'partenaireService'])->name('partenaires&services');
    Route::post('store-partenaire',[PartenaireController::class, 'store'])->name('partenaire-store');
    Route::delete('delete-partenaire, {partenaire:id}',[PartenaireController::class, 'destroy'])->name('partenaire-delete');

    Route::get('create-service',[ServiceController::class, 'create'])->name('service-create');
    Route::post('store-service',[ServiceController::class, 'store'])->name('service-store');
    Route::get('edit-service,{service:slug}', [ServiceController::class, 'edit'])->name('service-edit');
    Route::get('show-service,{service:slug}', [ServiceController::class, 'show'])->name('service-show');
    Route::put('active-service/{service:slug}', [ServiceController::class, 'activeOrNot'])->name('service-active');
    Route::delete('delete-service/{service:slug}', [ServiceController::class, 'destroy'])->name('service-delete');

    Route::get('actualites-list', [ActualiteController::class, 'index'])->name('actualites-list');
    Route::get('actualites-grid', [ActualiteController::class, 'index'])->name('actualites-grid');
    Route::get('create-actus', [ActualiteController::class, 'create'])->name('actus-create');
    Route::post('store-actus', [ActualiteController::class, 'store'])->name('actus-store');
    Route::patch('update-actus/{actualite:slug}', [ActualiteController::class, 'update'])->name('actus-update');
    Route::get('edit-actus/{actualite:slug}', [ActualiteController::class, 'edit'])->name('actus-edit');
    Route::delete('delete-actualite/{actualite:slug}', [ActualiteController::class, 'destroy'])->name('actus-delete');
    Route::put('active-actus/{actualite:slug}', [ActualiteController::class, 'activeOrNot'])->name('actus-active');

    //Route::resource('actualites/categories', CategoryNewController::class)->except(['create']);
    Route::get('actualites/categories', [CategoryNewController::class, 'index'])->name('categories-news');
    Route::post('store-categoryNew', [CategoryNewController::class, 'store'])->name('categoryNew-store');
    Route::get('show-categoryNew/{categoryNew:slug}', [CategoryNewController::class, 'show'])->name('categoryNew-details');
    Route::patch('update-categoryNew/{categoryNew:slug}', [CategoryNewController::class, 'update'])->name('categoryNew-update');
    Route::delete('delete-categoryNew/{categoryNew:slug}', [CategoryNewController::class, 'destroy'])->name('categoryNew-delete');

    Route::get('library',[ImageController::class, 'index'])->name('library');
    Route::post('store-image',[ImageController::class, 'store'])->name('image-store');
    Route::post('tmp-upload',[ImageController::class, 'tmpUpload'])->name('tmpUpload');
    Route::delete('tmp-delete',[ImageController::class, 'tmpDelete'])->name('tmpDelete');

    Route::get('emplois', [AdminController::class, 'emplois'])->name('emplois');
    Route::get('create-emploi', [AdminController::class, 'emplois_create'])->name('emplois-create');

});

Route::middleware(['guest'])->prefix('espace_emplois')->as('emplois.')->group(function(){
    Route::resource('emplois', EmploiController::class);
});

require __DIR__.'/auth.php';
