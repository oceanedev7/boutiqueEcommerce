<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('produits');
});

Route::get('/', [ProductsController::class, 'index'])->name('afficherProduits');
