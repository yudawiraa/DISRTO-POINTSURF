<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;


Route::get('/', function () {
    return view('home');
});

Route::resource('produk', ProdukController::class);

Route::get('/produk/{id}/delete', [ProdukController::class, 'delete'])->name('produk.delete');

