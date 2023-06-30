<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ActualiteController;
use App\Http\Controllers\Admin\StructureController;
use App\Http\Controllers\Admin\PartenaireController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\CategoryNewController;

/*
|--------------------------------------------------------------------------
| Admin Routes by Jonathan Tamuzo MENGA
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for OASIS application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware('admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('partenaires&services',[AdminController::class, 'partenaireService'])->name('partenaires&services');
    Route::post('store-partenaire',[PartenaireController::class, 'store'])->name('partenaire-store');
    Route::delete('delete-partenaire, {partenaire:id}',[PartenaireController::class, 'destroy'])->name('partenaire-delete');

    Route::resource('services', ServiceController::class)->except('index');
    Route::put('active-service/{service:slug}', [ServiceController::class, 'activeOrNot'])->name('service-active');

    Route::get('actualites-list', [ActualiteController::class, 'index'])->name('actualites-list');
    Route::get('actualites-grid', [ActualiteController::class, 'index'])->name('actualites-grid');
    Route::resource('actualites', ActualiteController::class)->except('index');
    Route::put('active-actus/{actualite:slug}', [ActualiteController::class, 'activeOrNot'])->name('actus-active');

    //Route::resource('actualites/categories', CategoryNewController::class)->except(['create']);
    Route::get('actus/categories', [CategoryNewController::class, 'index'])->name('categories-news');
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
    Route::post('store-emploi', [App\Http\Controllers\Admin\EmploiController::class, 'store'])->name('emplois-store');
    Route::put('visible-emploi/{emploi:slug}', [App\Http\Controllers\Admin\EmploiController::class, 'visibleOrNot'])->name('emploi-visible');
    Route::get('details-emploi/{emploi:slug}', [App\Http\Controllers\Admin\EmploiController::class, 'show'])->name('emploi-details');
    Route::delete('delete-emploi/{emploi:slug}', [App\Http\Controllers\Admin\EmploiController::class, 'destroy'])->name('emploi-delete');

    Route::resource('recruteurs', StructureController::class)->only(['index', 'show', 'destroy']);

    Route::middleware('role:Super Admin|manage admins')->group(function(){
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
        Route::put('removeRole/{user}', [AdminController::class, 'removeRole'])->name('removeRoles');
        Route::put('addRole/{user}', [AdminController::class, 'addRoles'])->name('addRoles');
    });
    Route::resource('administrateurs', AdminController::class);
    Route::resource('cv-theque', CustomerController::class);

    Route::get('pages/{page:href}', [PageController::class, 'view'] )->name('pages');
    Route::get('pages-all', [PageController::class, 'index'] )->name('pages-all');
});

