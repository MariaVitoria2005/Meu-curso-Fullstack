<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\OrdemServicoController;

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
    Route::get('/', function () {
        return view('welcome');
    })->name('pagina_inicial');

    Route::get('/produtos', [ProdutoController::class, 'index'])->name('produto.index');
    Route::get('/produtos_salvar', [ProdutoController::class, 'create'])->name('produto.create');
    Route::get('/produtos/editar/{id}', [ProdutoController::class, 'edit'])->name('produto.edit');
    Route::post('/produtos', [ProdutoController::class, 'store'])->name('produto.salvar');
    Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy'])->name('produto.destroy');
    Route::put('produtos/{id}', [ProdutoController::class, 'update'])->name('produto.update');
    Route::get('/produtos/{id}', [ProdutoController::class, 'show'])->name('produto.show');

    Route::get('/categorias', [CategoriaController::class, 'index'])->name('categoria.index');
    Route::get('/categorias/tipo', [CategoriaController::class, 'create'])->name('categoria.create');
    Route::get('/categorias/editar/{id}', [CategoriaController::class, 'edit'])->name('categoria.edit');
    Route::post('/categorias', [CategoriaController::class, 'store'])->name('categoria.salvar');
    Route::delete('/categorias/{id}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');
    Route::put('categorias/{id}', [CategoriaController::class, 'update'])->name('categoria.update');
    Route::get('/categorias/{id}', [CategoriaController::class, 'show'])->name('categoria.show');

    Route::get('/clientes', [ClienteController::class, 'index'])->name('cliente.index');
    Route::get('/clientes/create', [ClienteController::class, 'create'])->name('cliente.create');
    Route::get('/clientes/editar/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');
    Route::post('/clientes', [ClienteController::class, 'store'])->name('cliente.salvar');
    Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('cliente.destroy');
    Route::put('clientes/{id}', [ClienteController::class, 'update'])->name('cliente.update');
    Route::get('/clientes/{id}', [ClienteController::class, 'show'])->name('cliente.show');
    Route::post('/clientes/{id}/ativar', [ClienteController::class, 'atualizarStatus'])->name('cliente.atualizarStatus');

    Route::get('/empresas', [EmpresaController::class, 'index'])->name('empresa.index');
    Route::get('/empresas_salvar', [EmpresaController::class, 'create'])->name('empresa.create');
    Route::get('/empresas/editar/{id}', [EmpresaController::class, 'edit'])->name('empresa.edit');
    Route::post('/empresas', [EmpresaController::class, 'store'])->name('empresa.salvar');
    Route::delete('/empresas/{id}', [EmpresaController::class, 'destroy'])->name('empresa.destroy');
    Route::put('empresas/{id}', [EmpresaController::class, 'update'])->name('empresa.update');
    Route::get('/empresas/{id}', [EmpresaController::class, 'show'])->name('empresa.show');

    Route::get('/servicos', [ServicoController::class, 'index'])->name('servico.index');
    Route::get('/servicos/tipo', [ServicoController::class, 'create'])->name('servico.create');
    Route::get('/servicos/editar/{id}', [ServicoController::class, 'edit'])->name('servico.edit');
    Route::post('/servicos', [ServicoController::class, 'store'])->name('servico.salvar');
    Route::delete('/servicos/{id}', [ServicoController::class, 'destroy'])->name('servico.destroy');
    Route::put('servicos/{id}', [ServicoController::class, 'update'])->name('servico.update');
    Route::get('/servicos/{id}', [ServicoController::class, 'show'])->name('servico.show');

    Route::get('/ordemservicos', [OrdemServicoController::class, 'index'])->name('ordemservico.index');
    Route::get('/ordemservicos/create', [OrdemServicoController::class, 'create'])->name('ordemservico.create');
    Route::get('/ordemservicos/editar/{id}', [OrdemServicoController::class, 'edit'])->name('ordemservico.edit');
    Route::post('/ordemservicos', [OrdemServicoController::class, 'store'])->name('ordemservico.store');
    Route::delete('/ordemservicos/{id}', [OrdemServicoController::class, 'destroy'])->name('ordemservico.destroy');
    Route::put('/ordemservicos/{id}', [OrdemServicoController::class, 'update'])->name('ordemservico.update');
    Route::get('/ordemservicos/{id}', [OrdemServicoController::class, 'show'])->name('ordemservico.show');
});

require __DIR__.'/auth.php';
