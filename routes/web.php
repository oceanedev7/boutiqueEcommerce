<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('produits');
});

Route::get('/', [ProductsController::class, 'index'])->name('afficherProduits');


Route::get('/details/{id}', [ProductsController::class, 'show'])->name('afficherDetails');

Route::get('/add', [ProductsController::class, 'NewProduit']);
Route::post('/add', [ProductsController::class, 'create'])->name('ajouterProduits');

Route::get('/edit/{id}', [ProductsController::class,'edit'])->name('editerProduits');
Route::post('/update/{id}', [ProductsController::class,'update'])->name('modifierProduits');
Route::get('edit/{id}/delete', [ProductsController::class,'destroy'])->name('supprimerProduits');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','product'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('product')->group(function () {
    Route::get('/', [ProductsController::class, 'index'])->name('afficherProduits');
    Route::get('/details/{id}', [ProductsController::class, 'show'])->name('afficherDetails');

    Route::get('/add', [ProductsController::class, 'NewProduit']);
    Route::post('/add', [ProductsController::class, 'create'])->name('ajouterProduits');

    Route::get('/edit/{id}', [ProductsController::class,'edit'])->name('editerProduits');
    Route::post('/update/{id}', [ProductsController::class,'update'])->name('modifierProduits');
    Route::get('edit/{id}/delete', [ProductsController::class,'destroy'])->name('supprimerProduits');
});

require __DIR__.'/auth.php';

