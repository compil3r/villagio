<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Acabamento;
use App\Models\ItemAcabamento;
class AcabamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acabamentos = Acabamento::all();
        return view('dashboard.acabamentos.index', compact('acabamentos'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.acabamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $acabamento = new Acabamento();
        $acabamento->nome = $request->titulo;
        $acabamento->descricao = $request->descricao;
        // upload da imagem
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $requestImage = $request->imagem;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/acabamentos'), $imageName);
            $acabamento->imagem = $imageName;
        }

        $acabamento->save();

        return redirect()->route('dashboard.acabamentos.index');
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
        $acabamento = Acabamento::find($id);
        return view('dashboard.acabamentos.edit', compact('acabamento'));
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
        $acabamento = Acabamento::find($id);
        $acabamento->nome = $request->titulo;
        $acabamento->descricao = $request->descricao;
        // upload da imagem
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $requestImage = $request->imagem;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/acabamentos'), $imageName);
            $acabamento->imagem = $imageName;
        } else {
            $acabamento->imagem = $acabamento->imagem;
        }

        $acabamento->save();

        return redirect()->route('dashboard.acabamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Acabamento::destroy($id);
        return redirect()->route('dashboard.acabamentos.index');
    }



    // ITENS 

    public function itens($id)
    {
        $acabamento = Acabamento::find($id);
        $items = $acabamento->itens;
        return view('dashboard.acabamentos.itens.index', compact('acabamento', 'items'));
    }

    public function createItem($id)
    {
        $acabamento = Acabamento::find($id);
        return view('dashboard.acabamentos.itens.create', compact('acabamento'));
    }

    public function storeItem($id, Request $request)
    {
   
        $acabamento = Acabamento::find($id);
        $item = new ItemAcabamento();
        $item->nome = $request->nome;
        $item->acabamento_id = $acabamento->id;
        // upload da imagem
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $requestImage = $request->imagem;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/acabamentos'), $imageName);
            $item->imagem = $imageName;
        }

        $item->save();

        return redirect()->route('dashboard.acabamentos.itens.index', $acabamento->id);
    }

    public function editItem($id)
    {   
        $item = ItemAcabamento::find($id);

        $acabamento = Acabamento::find($item->acabamento_id);

        return view('dashboard.acabamentos.itens.edit', compact('acabamento', 'item'));
    }

    public function updateItem($id, Request $request)
    {
        $item = ItemAcabamento::find($id);
        $acabamento = Acabamento::find($item->acabamento_id);
        $item->nome = $request->nome;
        // upload da imagem
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $requestImage = $request->imagem;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/acabamentos'), $imageName);
            $item->imagem = $imageName;
        } else {
            $item->imagem = $item->imagem;
        }

        $item->save();

        return redirect()->route('dashboard.acabamentos.itens.index', $acabamento->id);

    }

    public function destroyItem($id) {
        $item = ItemAcabamento::find($id);
        $acabamento = $item->acabamento_id;

        ItemAcabamento::destroy($id);

        return redirect()->route('dashboard.acabamentos.itens.index', $acabamento);

    }

}
