<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
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

Route::middleware('can:admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('partenaires&services',[AdminController::class, 'partenaireService'])->name('partenaires&services');
    Route::post('store-partenaire',[PartenaireController::class, 'store'])->name('partenaire-store');
    Route::delete('delete-partenaire, {partenaire:id}',[PartenaireController::class, 'destroy'])->name('partenaire-delete');
    Route::get('actualites-list', [ActualiteController::class, 'index'])->name('actualites-list');
    Route::get('actualites-grid', [ActualiteController::class, 'index'])->name('actualites-grid');
    Route::get('create-actus', [ActualiteController::class, 'create'])->name('actus-create');
    Route::post('store-actus', [ActualiteController::class, 'store'])->name('actus-store');
    Route::patch('update-actus/{actualite:slug}', [ActualiteController::class, 'update'])->name('actus-update');
    Route::get('edit-actus/{actualite:slug}', [ActualiteController::class, 'edit'])->name('actus-edit');
    Route::delete('delete-actualite/{actualite:slug}', [ActualiteController::class, 'destroy'])->name('actus-delete');
    Route::put('active-actus/{actualite:slug}', [ActualiteController::class, 'activeOrNot'])->name('actus-active');


    Route::get('actualites/categories', [CategoryNewController::class, 'index'])->name('categories-news');
    Route::post('store-categoryNew', [CategoryNewController::class, 'store'])->name('categoryNew-store');
    Route::get('show-categoryNew/{categoryNew:slug}', [CategoryNewController::class, 'show'])->name('categoryNew-details');
    Route::patch('update-categoryNew/{categoryNew:slug}', [CategoryNewController::class, 'update'])->name('categoryNew-update');
    Route::delete('delete-categoryNew/{categoryNew:slug}', [CategoryNewController::class, 'destroy'])->name('categoryNew-delete');


});

require __DIR__.'/auth.php';
