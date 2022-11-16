<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Imagem;
use Illuminate\Support\Facades\Storage;
//file
use Illuminate\Support\Facades\File;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = \App\Models\Produto::all();
        return view('dashboard.produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //array of mock objects categorias with id and name
        $categorias = [
            (object) ['id' => 'solucoes-inteligentes', 'nome' => 'Solucões Inteligentes'],
            (object) ['id' => 'perfis-para-portas', 'nome' => 'Perfis para Portas'],
            (object) ['id' => 'puxadores', 'nome' => 'Puxadores'],
            (object) ['id' => 'divisorias-de-ambientes', 'nome' => 'Divisórias de Ambientes'],
            (object) ['id' => 'acessorios', 'nome' => 'Acessórios'],
            (object) ['id' => 'acabamentos', 'nome' => 'Acabamentos'],
            (object) ['id' => 'sistemas', 'nome' => 'Sistemas'],
            (object) ['id' => 'esquadrias', 'nome' => 'Esquadrias'],

        ];

        return view('dashboard.produtos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        // dd($request->all());
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'categoria' => 'required',
        ]);

        $produto = new \App\Models\Produto();
        $produto->titulo = $request->titulo;
        $produto->subtitulo = $request->subtitulo;
        $produto->descricao = $request->descricao;
        $produto->utilizacao = $request->utilizacao;
 
        $produto->categoria = $request->categoria;
        //imagem upload
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $requestImage = $request->imagem;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/uploads'), $imageName);
            $produto->imagem = $imageName;
        }

     

        $produto->save();

           //imagens upload and save in database with relationship
           if ($request->hasFile('imagens')) {
            $images = $request->file('imagens');
            $imagesArray = [];
            foreach ($images as $image) {
                $extension = $image->extension();
                $imageName = md5($image->getClientOriginalName() . strtotime("now")) . "." . $extension;
                $image->move(public_path('img/uploads'), $imageName);
                $imagesArray[] = ['imagem' => $imageName];
            }
            $produto->imagens()->createMany($imagesArray);
        }

        // foreach in nameCompativeis with index 
        if ($request->has('nameCompativel')) {
            $compativeisArray = [];

            foreach ($request->nameCompativel as $index => $compativeis) {
                if($request->tipoCompativel[$index] == 'link') {
                    $compativeisArray[] = ['compativel_id' => $request->linkCompativel[$index], 'tipo' => 'produto', 'nome' => $request->nameCompativel[$index]];
                } else {
                    // upload image inside $request->imagemCompativel[$index]
                    $requestImage = $request->ImagemCompativel[$index];
                    $extension = $requestImage->extension();
                    $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
                    $requestImage->move(public_path('img/uploads'), $imageName);
                    $compativeisArray[] = ['imagem' => $imageName, 'tipo' => 'imagem', 'nome' => $request->nameCompativel[$index]];
                }
            }
            $produto->compativeis()->createMany($compativeisArray);

        }
        
        

        return redirect()->route('dashboard.produtos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categorias = [
            (object) ['id' => 'solucoes-inteligentes', 'nome' => 'Solucões Inteligentes'],
            (object) ['id' => 'perfis-para-portas', 'nome' => 'Perfis para Portas'],
            (object) ['id' => 'puxadores', 'nome' => 'Puxadores'],
            (object) ['id' => 'divisorias-de-ambientes', 'nome' => 'Divisórias de Ambientes'],
            (object) ['id' => 'acessorios', 'nome' => 'Acessórios'],
            (object) ['id' => 'acabamentos', 'nome' => 'Acabamentos'],
            (object) ['id' => 'sistemas', 'nome' => 'Sistemas'],
            (object) ['id' => 'esquadrias', 'nome' => 'Esquadrias'],

        ];

        $produto = \App\Models\Produto::find($id);
        
        $produtos = \App\Models\Produto::all();
        //array of mock objects categorias with id and name
        

        return view('dashboard.produtos.edit', compact('produto', 'categorias', 'produtos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          // dd($request->all());
          $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'categoria' => 'required',
        ]);

        $produto = \App\Models\Produto::find($id);

        $produto->titulo = $request->titulo;
        $produto->subtitulo = $request->subtitulo;
        $produto->descricao = $request->descricao;
        $produto->utilizacao = $request->utilizacao;
        
        $produto->categoria = $request->categoria;
        //imagem upload
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $requestImage = $request->imagem;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/uploads'), $imageName);
            $produto->imagem = $imageName;
        }

        $produto->save();

        //imagens upload and save in database with relationship

        if ($request->hasFile('imagens')) {
            $images = $request->file('imagens');
            $imagesArray = [];
            foreach ($images as $image) {
                $extension = $image->extension();
                $imageName = md5($image->getClientOriginalName() . strtotime("now")) . "." . $extension;
                $image->move(public_path('img/uploads'), $imageName);
                $imagesArray[] = ['imagem' => $imageName];
            }
            $produto->imagens()->createMany($imagesArray);
        }

        // foreach in nameCompativeis with index
        if ($request->has('nameCompativel')) {
            $compativeisArray = [];

            foreach ($request->nameCompativel as $index => $compativeis) {
                if($request->tipoCompativel[$index] == 'link') {
                    $compativeisArray[] = ['compativel_id' => $request->linkCompativel[$index], 'tipo' => 'produto', 'nome' => $request->nameCompativel[$index], 'grupo' => $request->grupo[$index]];
                } else {
                    // upload image inside $request->imagemCompativel[$index]
                    $requestImage = $request->ImagemCompativel[$index];
                    $extension = $requestImage->extension();
                    $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
                    $requestImage->move(public_path('img/uploads'), $imageName);
                    $compativeisArray[] = ['imagem' => $imageName, 'tipo' => 'imagem', 'nome' => $request->nameCompativel[$index], 'grupo' => $request->grupo[$index]];
                }
            }

            $produto->compativeis()->delete();
            $produto->compativeis()->createMany($compativeisArray);

        }

        return redirect()->route('dashboard.produtos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //destroy with delete method
        $produto = \App\Models\Produto::find($id);
        //remove image from folder
        if ($produto->imagem) {
            $image_path = public_path('img/uploads/' . $produto->imagem);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }
        //remove images from folder
        if ($produto->imagens) {
            foreach ($produto->imagens as $imagem) {
                $image_path = public_path('img/uploads/' . $imagem->imagem);
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
        }
        //remove images from database
        $produto->imagens()->delete();
        //remove compativeis from database
        $produto->compativeis()->delete();

        $produto->delete();

        return redirect()->route('dashboard.produtos.index');
    }

    function apiProdutos()
    {
        $produtos = \App\Models\Produto::all();
        return response()->json($produtos);
    }
}
