<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('produits');
});

Route::get('/', [ProductsController::class, 'index'])->name('afficherProduits');
Route::get('/details/{id}', [ProductsController::class, 'show'])->name('afficherDetails');
Route::get('/add', [ProductsController::class, 'NewProduit']);
Route::post('/add', [ProductsController::class, 'create'])->name('ajouterProduits');


