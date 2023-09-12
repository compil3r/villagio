<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Outro;
use Image;

class TelaInicialController extends Controller
{
    public function index() {
        $telaInicial = Outro::first();
  
        return view('dashboard.telaInicial.index', compact('telaInicial'));
    }

    public function update(Request $request) {
        $request->validate([
            'textoInicial' => 'required'
        ]);

        $inicial = Outro::first();
        $inicial->textoInicial = $request->get('textoInicial');
        // $inicial->imagemInicial = $request->get('imagemInicial');
        //upload image
        if($request->hasFile('imagemInicial')) {
            $image = $request->file('imagemInicial');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            // crop image to square size before upload
            
            $img = Image::make($image->getRealPath());

            $img->fit(400)->save(public_path('img/uploads/') . $new_name);

            $inicial->imagemInicial = $new_name;
        } else {
            $inicial->imagemInicial = $inicial->imagemInicial;
        }

        $inicial->save();

        return redirect('/dashboard/tela-inicial')->with('success', 'Tela inicial atualizada com sucesso!');
    }

    public function indexDestaque() {
        $destaque = Outro::first();
     
    
        return view('dashboard.telaInicial.destaque', compact('destaque'));
    }

    public function updateDestaque(Request $request) {
        // testar se imagem1, imagem4, e imagem5 existe, se sim, fazer upload e salvar os nomes

        $request->validate([
            'titulo1' => 'required',
            'link1' => 'required',
            
            'titulo2' => 'required',
            'link2' => 'required',
            'titulo3' => 'required',
            'link3' => 'required',
            'titulo4' => 'required',
            'link4' => 'required',
            
            'titulo5' => 'required',
            'link5' => 'required',


        ]);

        $destaque = Outro::first();

        $destaque->titulo1 = $request->get('titulo1');
        $destaque->link1 = $request->get('link1');
        $destaque->titulo2 = $request->get('titulo2');
        $destaque->link2 = $request->get('link2');
        $destaque->titulo3 = $request->get('titulo3');
        $destaque->link3 = $request->get('link3');
        $destaque->titulo4 = $request->get('titulo4');
        $destaque->link4 = $request->get('link4');
        $destaque->titulo5 = $request->get('titulo5');
        $destaque->link5 = $request->get('link5');

        //upload image
        if($request->hasFile('imagem1')) {
            $image = $request->file('imagem1');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            // crop image to square size before upload
            
            $img = Image::make($image->getRealPath());

            $img->save(public_path('img/uploads/') . $new_name);

            $destaque->imagem1 = $new_name;
        } else {
            $destaque->imagem1 = $destaque->imagem1;
        }

        if($request->hasFile('imagem2')) {
            $image = $request->file('imagem2');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            // crop image to square size before upload
            
            $img = Image::make($image->getRealPath());

            $img->save(public_path('img/uploads/') . $new_name);

            $destaque->imagem2 = $new_name;
        } else {
            $destaque->imagem2 = $destaque->imagem2;
        }

        if($request->hasFile('imagem3')) {
            $image = $request->file('imagem3');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            // crop image to square size before upload
            
            $img = Image::make($image->getRealPath());

            $img->save(public_path('img/uploads/') . $new_name);

            $destaque->imagem3 = $new_name;
        } else {
            $destaque->imagem3 = $destaque->imagem3;
        }


        if($request->hasFile('imagem4')) {
            $image = $request->file('imagem4');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            // crop image to square size before upload
            
            $img = Image::make($image->getRealPath());

            $img->save(public_path('img/uploads/') . $new_name);

            $destaque->imagem4 = $new_name;
        } else {
            $destaque->imagem4 = $destaque->imagem4;
        }

        if($request->hasFile('imagem5')) {
            $image = $request->file('imagem5');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            // crop image to square size before upload
            
            $img = Image::make($image->getRealPath());

            $img->save(public_path('img/uploads/') . $new_name);

            $destaque->imagem5 = $new_name;
        } else {
            $destaque->imagem5 = $destaque->imagem5;
        }

        $destaque->save();

        return redirect('/dashboard/destaques')->with('success', 'Tela inicial atualizada com sucesso!');


    }
}