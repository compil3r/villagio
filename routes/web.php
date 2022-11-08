<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('index');
});

Route::get('/empresa', function() {
    return view('empresa');
});

Route::get('/contato', function() {
    return view('contato');
});


Route::get('/franquias', function() {
    return view('franquias');
});


Route::get('/produtos', function() {
    return view('produtos');
});

Route::get('/projetos', [\App\Http\Controllers\ProjetosController::class, 'index'])->name('projetos.index');

Route::get('/grupo-de-produtos/{categoria}', [App\Http\Controllers\CategoriaController::class, 'index'])->name('grupo-de-produtos');

Route::get('/produto/{slug}', [App\Http\Controllers\ProdutosController::class, 'index'])->name('produto');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/api/produtos', [App\Http\Controllers\Dashboard\ProdutosController::class, 'apiProdutos'])->name('api-produtos');

//route to dashboard/produtos


//dashboard produtos all routes with prefix dashboard/produtos
Route::prefix('dashboard/produtos')->middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\Dashboard\ProdutosController::class, 'index'])->name('dashboard.produtos.index');
    Route::get('/create', [App\Http\Controllers\Dashboard\ProdutosController::class, 'create'])->name('dashboard.produtos.create');
    Route::post('/store', [App\Http\Controllers\Dashboard\ProdutosController::class, 'store'])->name('dashboard.produtos.store');
    Route::get('/edit/{id}', [App\Http\Controllers\Dashboard\ProdutosController::class, 'edit'])->name('dashboard.produtos.edit');
    Route::post('/update/{id}', [App\Http\Controllers\Dashboard\ProdutosController::class, 'update'])->name('dashboard.produtos.update');
    Route::delete('/destroy/{id}', [App\Http\Controllers\Dashboard\ProdutosController::class, 'destroy'])->name('dashboard.produtos.destroy');
});

require __DIR__.'/auth.php';
