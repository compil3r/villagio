<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();

        // $categorias = [
        //     'solucoes-inteligentes' => ['id' => 'solucoes-inteligentes', 'nome' => 'Solucões Inteligentes'],
        //     'perfis-para-portas' => ['id' => 'perfis-para-portas', 'nome' => 'Perfis para Portas'],
        //     'puxadores' => ['id' => 'puxadores', 'nome' => 'Puxadores'],
        //     'divisorias-de-ambientes' => ['id' => 'divisorias-de-ambientes', 'nome' => 'Divisórias de Ambientes'],
        //     'acessorios' => ['id' => 'acessorios', 'nome' => 'Acessórios'],
        //     'acabamentos' => ['id' => 'acabamentos', 'nome' => 'Acabamentos'],
        //     'sistemas' => ['id' => 'sistemas', 'nome' => 'Sistemas'],
        //     'esquadrias' => ['id' => 'esquadrias', 'nome' => 'Esquadrias']

        // ];

        // foreach ($categorias as $categoria) {
        //     $novaCategoria = new Categoria();
        //     $novaCategoria->titulo = $categoria['nome'];
        //     $novaCategoria->slug = $categoria['id'];
        //     $novaCategoria->imagem = $categoria['id'] . '.png';
        //     $novaCategoria->save();
        // }

        // dd($categorias);
        return view('dashboard.categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('dashboard.categorias.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'imagem' => 'required'
        ]);
        
        // slugify the title
        $slug = \Str::slug($request->get('titulo'));
        
        // upload image 
        if($request->hasFile('imagem')) {
            $image = $request->file('imagem');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/uploads/categorias'), $new_name);

        } else {
            $new_name = null;
        }

        $categoria = new Categoria([
            'titulo' => $request->get('titulo'),
            'slug' => $slug,
            'imagem' => $new_name
        ]);

        $categoria->save();

        return redirect('/dashboard/categorias')->with('success', 'Categoria adicionada com sucesso!');
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
        $categoria = Categoria::find($id);

        return view('dashboard.categorias.edit', compact('categoria'));
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
        
        $request->validate([
            'titulo' => 'required',
           
        ]);

        $categoria = Categoria::find($id);
        $categoria->titulo = $request->get('titulo');
        $categoria->slug = \Str::slug($request->get('titulo'));

        if($request->hasFile('imagem')) {
            $image = $request->file('imagem');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/uploads/categorias'), $new_name);
            $categoria->imagem = $new_name;
        } else {
            $categoria->imagem = $categoria->imagem;
        }

        $categoria->save();

        return redirect('/dashboard/categorias')->with('success', 'Categoria atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Categoria::find($id)->delete();

        return redirect('/dashboard/categorias')->with('success', 'Categoria removida com sucesso!');
    }
}
