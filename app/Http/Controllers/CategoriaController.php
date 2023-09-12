<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acabamento;
use App\Models\ItemAcabamento;
use App\Models\Categoria;

class CategoriaController extends Controller
{

    // array of categories

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($c)
    {
        $categoria = Categoria::where('slug', $c)->first(); 

        if($c != "acabamentos") {
            $produtos = \App\Models\Produto::where('categoria_id', $categoria->id)->get();
            $nome = $categoria->titulo;
            return view('grupo-de-produtos', compact('produtos','nome'));
        } else {
            return view('acabamentos');
        }
    }

    public function acabamentos() {
        $acabamentos = Acabamento::all();

        return view('produtos.acabamentos.index', compact('acabamentos'));
    }

    public function indexAcabamento($slug) {
        $acabamento = Acabamento::where('slug', $slug)->first();
        $itens = ItemAcabamento::where('acabamento_id', $acabamento->id)->get();
        
        return view('produtos.acabamentos.show', compact('acabamento', 'itens'));
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
