<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\CategoriaController;

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

    Route::get('/postagem', [PostagemController::class, 'index'])->name('postagem.index');
    Route::get('/postagem/create', [PostagemController::class, 'create'])->name('postagem.create');
    Route::get('/postagem/editar/{id}', [PostagemController::class, 'edit'])->name('postagem.edit');
    Route::post('/postagem', [PostagemController::class, 'store'])->name('postagem.salvar');
    Route::delete('/postagem/{id}', [PostagemController::class, 'destroy'])->name('postagem.destroy');
    Route::put('postagem/{id}', [PostagemController::class, 'update'])->name('postagem.update');
    Route::get('/postagem/{id}', [PostagemController::class, 'show'])->name('postagem.show');

    Route::get('/categorias', [CategoriaController::class, 'index'])->name('categoria.index');
    Route::get('/categorias/tipo', [CategoriaController::class, 'create'])->name('categoria.create');
    Route::get('/categorias/editar/{id}', [CategoriaController::class, 'edit'])->name('categoria.edit');
    Route::post('/categorias', [CategoriaController::class, 'store'])->name('categoria.salvar');
    Route::delete('/categorias/{id}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');
    Route::put('categorias/{id}', [CategoriaController::class, 'update'])->name('categoria.update');
    Route::get('/categorias/{id}', [CategoriaController::class, 'show'])->name('categoria.show');

});

require __DIR__.'/auth.php';
