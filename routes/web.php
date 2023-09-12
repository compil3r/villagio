<?php

use Illuminate\Support\Facades\Route;
use App\Models\Ano;
use App\Models\Outro;
use Illuminate\Http\Request;

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
    $inicial = Outro::first();
    // 3 RECENTES POSTS
    $posts = \App\Models\Post::orderBy('id', 'desc')->limit(3)->get();
    return view('index', compact('inicial', 'posts'));  
});

Route::post("/postAcceptor", function(Request $request) {

    // upload file to img/uploads and return link

    $image = $request->file('file');
    $new_name = rand() . '.' . $image->getClientOriginalExtension();
    // crop image to square size before upload
    $img = Image::make($image->getRealPath());
    $img->save(public_path('img/uploads/') . $new_name);
    $link = url('img/uploads/') . '/' . $new_name;  
    return response()->json(['location' => $link]);


});

Route::get('/empresa', function() {
    $anos = Ano::orderBy('titulo', 'asc')->get();
    // MOUNT A ARRAY WITH titulo to index and descricao and titulo to value
    $format = $anos->mapWithKeys(function ($item) {
        return [$item['titulo'] => $item['descricao']];
    });

    //$format to json 
    $format = json_encode($format);

    return view('empresa', compact('anos', 'format'));
});

Route::get("blog/tag/{tag}", function($tag) {

    $posts = \App\Models\Post::where('tags', 'like', "%$tag%")->orWhere('tags', 'like', "%$tag")->get();

    
    return view('blog.resultados', compact('posts', 'tag'));
});

Route::get('/blog/{id}', function($id) {
    $post = \App\Models\Post::find($id);
    // GET OTHER 3 RANDOM POSTS 
    $posts = \App\Models\Post::where('id', '!=', $id)->inRandomOrder()->limit(3)->get();

    return view('blog.show', compact('post', 'posts'));
});



Route::get('/contato', function() {
    return view('contato');
});


Route::get('/franquias', function() {
    return view('franquias');
});


Route::get('/produtos', function() {
    $categorias = \App\Models\Categoria::all();

    return view('produtos', compact('categorias'));
});

Route::get('/projetos', [\App\Http\Controllers\ProjetosController::class, 'index'])->name('projetos.index');

Route::get('/grupo-de-produtos/acabamentos', [App\Http\Controllers\CategoriaController::class, 'acabamentos'])->name('grupo-de-produtos.acabamentos');
Route::get('/grupo-de-produtos/{categoria}', [App\Http\Controllers\CategoriaController::class, 'index'])->name('grupo-de-produtos');

Route::get("/acabamento/{slug}", [App\Http\Controllers\CategoriaController::class, 'indexAcabamento'])->name("acabamento");
Route::get('/produto/{slug}', [App\Http\Controllers\ProdutosController::class, 'index'])->name('produto');
Route::get('/projeto/{slug}', [App\Http\Controllers\ProjetosController::class, 'show']);

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

//dashboard produtos all routes with prefix dashboard/produtos
Route::prefix('dashboard/projetos')->middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\Dashboard\ProjetosController::class, 'index'])->name('dashboard.projetos.index');
    Route::get('/create', [App\Http\Controllers\Dashboard\ProjetosController::class, 'create'])->name('dashboard.projetos.create');
    Route::post('/store', [App\Http\Controllers\Dashboard\ProjetosController::class, 'store'])->name('dashboard.projetos.store');
    Route::get('/edit/{id}', [App\Http\Controllers\Dashboard\ProjetosController::class, 'edit'])->name('dashboard.projetos.edit');
    Route::post('/update/{id}', [App\Http\Controllers\Dashboard\ProjetosController::class, 'update'])->name('dashboard.projetos.update');
    Route::delete('/destroy/{id}', [App\Http\Controllers\Dashboard\ProjetosController::class, 'destroy'])->name('dashboard.projetos.destroy');
});

Route::prefix('dashboard/acabamentos')->middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\Dashboard\AcabamentosController::class, 'index'])->name('dashboard.acabamentos.index');
    Route::get('/create', [App\Http\Controllers\Dashboard\AcabamentosController::class, 'create'])->name('dashboard.acabamentos.create');
    Route::post('/store', [App\Http\Controllers\Dashboard\AcabamentosController::class, 'store'])->name('dashboard.acabamentos.store');
    Route::get('/edit/{id}', [App\Http\Controllers\Dashboard\AcabamentosController::class, 'edit'])->name('dashboard.acabamentos.edit');
    Route::post('/update/{id}', [App\Http\Controllers\Dashboard\AcabamentosController::class, 'update'])->name('dashboard.acabamentos.update');
    Route::delete('/destroy/{id}', [App\Http\Controllers\Dashboard\AcabamentosController::class, 'destroy'])->name('dashboard.acabamentos.destroy');
    Route::prefix('itens')->group(function() {
        Route::get('/{id}', [App\Http\Controllers\Dashboard\AcabamentosController::class, 'itens'])->name('dashboard.acabamentos.itens.index');
        Route::get('/create/{id}', [App\Http\Controllers\Dashboard\AcabamentosController::class, 'createItem'])->name('dashboard.acabamentos.itens.create');
        Route::post('/store/{id}', [App\Http\Controllers\Dashboard\AcabamentosController::class, 'storeItem'])->name('dashboard.acabamentos.itens.store');
        Route::get('/edit/{id}', [App\Http\Controllers\Dashboard\AcabamentosController::class, 'editItem'])->name('dashboard.acabamentos.itens.edit');
        Route::post('/update/{id}', [App\Http\Controllers\Dashboard\AcabamentosController::class, 'updateItem'])->name('dashboard.acabamentos.itens.update');
        Route::delete('/destroy/{id}', [App\Http\Controllers\Dashboard\AcabamentosController::class, 'destroyItem'])->name('dashboard.acabamentos.itens.destroy');
    });
});

Route::prefix("dashboard/anos")->middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\Dashboard\AnosController::class, 'index'])->name('dashboard.anos.index');
    Route::get('/create', [App\Http\Controllers\Dashboard\AnosController::class, 'create'])->name('dashboard.anos.create');
    Route::post('/store', [App\Http\Controllers\Dashboard\AnosController::class, 'store'])->name('dashboard.anos.store');
    Route::get('/edit/{id}', [App\Http\Controllers\Dashboard\AnosController::class, 'edit'])->name('dashboard.anos.edit');
    Route::post('/update/{id}', [App\Http\Controllers\Dashboard\AnosController::class, 'update'])->name('dashboard.anos.update');
    Route::delete('/destroy/{id}', [App\Http\Controllers\Dashboard\AnosController::class, 'destroy'])->name('dashboard.anos.destroy');
});

// dashboard/posts

Route::prefix('dashboard/posts')->middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\Dashboard\PostsController::class, 'index'])->name('dashboard.posts.index');
    Route::get('/create', [App\Http\Controllers\Dashboard\PostsController::class, 'create'])->name('dashboard.posts.create');
    Route::post('/store', [App\Http\Controllers\Dashboard\PostsController::class, 'store'])->name('dashboard.posts.store');
    Route::get('/edit/{id}', [App\Http\Controllers\Dashboard\PostsController::class, 'edit'])->name('dashboard.posts.edit');
    Route::post('/update/{id}', [App\Http\Controllers\Dashboard\PostsController::class, 'update'])->name('dashboard.posts.update');
    Route::delete('/destroy/{id}', [App\Http\Controllers\Dashboard\PostsController::class, 'destroy'])->name('dashboard.posts.destroy');
});

Route::prefix("dashboard/categorias")->middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\Dashboard\CategoriasController::class, 'index'])->name('dashboard.categorias.index');
    Route::get('/create', [App\Http\Controllers\Dashboard\CategoriasController::class, 'create'])->name('dashboard.categorias.create');
    Route::post('/store', [App\Http\Controllers\Dashboard\CategoriasController::class, 'store'])->name('dashboard.categorias.store');
    Route::get('/edit/{id}', [App\Http\Controllers\Dashboard\CategoriasController::class, 'edit'])->name('dashboard.categorias.edit');
    Route::post('/update/{id}', [App\Http\Controllers\Dashboard\CategoriasController::class, 'update'])->name('dashboard.categorias.update');
    Route::delete('/destroy/{id}', [App\Http\Controllers\Dashboard\CategoriasController::class, 'destroy'])->name('dashboard.categorias.destroy');
});



Route::get("dashboard/tela-inicial", [App\Http\Controllers\Dashboard\TelaInicialController::class, 'index'])->name('dashboard.telaInicial.index')->middleware(['auth']);
Route::post("dashboard/tela-inicial", [App\Http\Controllers\Dashboard\TelaInicialController::class, 'update'])->name('dashboard.telaInicial.store')->middleware(['auth']);

Route::get("dashboard/destaques", [App\Http\Controllers\Dashboard\TelaInicialController::class, 'indexDestaque'])->name('dashboard.destaque.index')->middleware(['auth']);
Route::post("dashboard/destaques", [App\Http\Controllers\Dashboard\TelaInicialController::class, 'updateDestaque'])->name('dashboard.destaque.store')->middleware(['auth']);

require __DIR__.'/auth.php';
