<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('dashboard.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create');
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
            'conteudo' => 'required',
            'imagem' => 'required',
        ]);

        // dd($request->all());
        $post = new Post();
        $post->titulo = $request->titulo;
        $post->slug = $request->slug;
        $post->descricao = $request->descricao;
        $post->conteudo = $request->conteudo;
        $post->tags = $request->tags;

        //upload image
        $image = $request->file('imagem');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/uploads/'), $new_name);
        $post->imagem = $new_name;

        $post->save();

        return redirect()->route('dashboard.posts.index');
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
        $post = Post::find($id);
        
        return view('dashboard.posts.edit', compact('post'));  
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
            'conteudo' => 'required',
        
        ]);

        $post = Post::find($id);
        $post->titulo = $request->titulo;
        $post->slug = $request->slug;
        $post->descricao = $request->descricao;
        $post->conteudo = $request->conteudo;
        $post->tags = $request->tags;
        
        //upload image
   
        if($request->hasFile('imagem')){
            $image = $request->file('imagem');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/uploads/'), $new_name);
            $post->imagem = $new_name;
        } else {
            $post->imagem = $post->imagem;
        }
        
        $post->save();

        return redirect()->route('dashboard.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        // remove image from folder
        $image_path = public_path('img/uploads/'.$post->imagem);
        if(file_exists($image_path)) {
            // delete
            unlink($image_path);
        }
        $post->delete();

        return redirect()->route('dashboard.posts.index');
    }
}
