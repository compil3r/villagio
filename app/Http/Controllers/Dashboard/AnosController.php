<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ano;
class AnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anos = Ano::orderBy('titulo', 'asc')->get();
        return view('dashboard.anos.index', compact('anos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.anos.create');    
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
        ]);

        $ano = new Ano([
            'titulo' => $request->get('titulo'),
            'descricao' => $request->get('descricao')
        ]);


        $ano->save();
        return redirect('/dashboard/anos')->with('success', 'Ano salvo com sucesso!');
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
        $ano = Ano::find($id);
        return view('dashboard.anos.edit', compact('ano'));
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

        $ano = Ano::find($id);
        $ano->titulo = $request->get('titulo');
        $ano->descricao = $request->get('descricao');
        $ano->save();

        return redirect('/dashboard/anos')->with('success', 'Ano atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ano = Ano::find($id);
        $ano->delete();

        return redirect('/dashboard/anos')->with('success', 'Ano deletado com sucesso!');
    }
}
