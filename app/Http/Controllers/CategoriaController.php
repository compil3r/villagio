<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    // array of categories

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($categoria)
    {
        $categorias = [
            'solucoes-inteligentes' => ['id' => 'solucoes-inteligentes', 'nome' => 'Solucões Inteligentes'],
            'perfis-para-portas' => ['id' => 'perfis-para-portas', 'nome' => 'Perfis para Portas'],
            'puxadores' => ['id' => 'puxadores', 'nome' => 'Puxadores'],
            'divisorias-de-ambientes' => ['id' => 'divisorias-de-ambientes', 'nome' => 'Divisórias de Ambientes'],
            'acessorios' => ['id' => 'acessorios', 'nome' => 'Acessórios'],
            'acabamentos' => ['id' => 'acabamentos', 'nome' => 'Acabamentos'],
            'sistemas' => ['id' => 'sistemas', 'nome' => 'Sistemas'],
            'esquadrias' => ['id' => 'esquadrias', 'nome' => 'Esquadrias']

        ];
    
        $produtos = \App\Models\Produto::where('categoria', $categoria)->get();
        $nome = $categorias[$categoria]['nome'];
        return view('grupo-de-produtos', compact('produtos','nome'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
