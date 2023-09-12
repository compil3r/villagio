<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Destaques') }}
        </h2>
    </x-slot>
    {{-- form to create new product with titulo, subtitulo, descricao, select categoria, imagem, without preco --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {{-- show errors in tailwind style --}}

                @if($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Erro!</strong>
                        <span class="block sm:inline">Por favor, corrija os erros abaixo.</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-red-500" role="button"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path
                                    d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                            </svg>
                        </span>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('dashboard.destaque.store') }}" method="post"
                        enctype="multipart/form-data">
            
                        @csrf
                    
                        <div class="grid grid-cols-1 gap-4">
                            <div>
                                <h3 style="font-size: 20px">Destaque 1 (com foto)</h3>
                                <hr style="margin-bottom: 20px; margin-top: 10px;">
                                <label for="">Titulo</label>
                                <input type="text" name="titulo1" class="block mt-1 w-full" value="{{$destaque->titulo1}}">

                                <label for="">Link</label>
                                <input type="text" name="link1" class="block mt-1 w-full" value="{{$destaque->link1}}">

                                <label for="">Imagem</label>
                                <input type="file" name="imagem1" class="block mt-1 w-full">
                                {{-- imagem atual --}}
                                <img src="{{ asset('img/uploads/' . $destaque->imagem1) }}" alt="" style="width: 100px; height: 100px; margin-top: 10px;">
                            </div>

                            <div>
                                <h3 style="font-size: 20px">Destaque 2</h3>
                                <hr style="margin-bottom: 20px; margin-top: 10px;">
                                <label for="">Titulo</label>
                                <input type="text" name="titulo2" class="block mt-1 w-full" value="{{$destaque->titulo2}}">

                                <label for="">Link</label>
                                <input type="text" name="link2" class="block mt-1 w-full" value="{{$destaque->link2}}">

                                <label for="">Imagem</label>
                                <input type="file" name="imagem2" class="block mt-1 w-full">
                                {{-- imagem atual --}}
                                <img src="{{ asset('img/uploads/' . $destaque->imagem2) }}" alt="" style="width: 100px; height: 100px; margin-top: 10px;">
                        </div>

                        <div>
                            <h3 style="font-size: 20px">Destaque 3</h3>
                            <hr style="margin-bottom: 20px; margin-top: 10px;">
                            <label for="">Titulo</label>
                            <input type="text" name="titulo3" class="block mt-1 w-full" value="{{$destaque->titulo3}}">

                            <label for="">Link</label>
                            <input type="text" name="link3" class="block mt-1 w-full" value="{{$destaque->link3}}">

                            <label for="">Imagem</label>
                            <input type="file" name="imagem3" class="block mt-1 w-full">
                            {{-- imagem atual --}}
                            <img src="{{ asset('img/uploads/' . $destaque->imagem3) }}" alt="" style="width: 100px; height: 100px; margin-top: 10px;">

                            
                        </div>

                        <div>
                            <h3 style="font-size: 20px">Destaque 4 (com fundo)</h3>
                            <hr style="margin-bottom: 20px; margin-top: 10px;">
                            <label for="">Titulo</label>
                            <input type="text" name="titulo4" class="block mt-1 w-full" value="{{$destaque->titulo4}}">

                            <label for="">Link</label>
                            <input type="text" name="link4" class="block mt-1 w-full" value="{{$destaque->link4}}">

                            <label for="">Imagem</label>
                            <input type="file" name="imagem4" class="block mt-1 w-full">
                            {{-- imagem atual --}}
                            <img src="{{ asset('img/uploads/' . $destaque->imagem4) }}" alt="" style="width: 100px; height: 100px; margin-top: 10px;">
                        </div>

                        <div>
                            <h3 style="font-size: 20px">Destaque 5 (foto maior, com fundo)</h3>
                            <hr style="margin-bottom: 20px; margin-top: 10px;">
                            <label for="">Titulo</label>
                            <input type="text" name="titulo5" class="block mt-1 w-full" value="{{$destaque->titulo5}}">

                            <label for="">Link</label>
                            <input type="text" name="link5" class="block mt-1 w-full" value="{{$destaque->link5}}">

                            <label for="">Imagem</label>
                            <input type="file" name="imagem5" class="block mt-1 w-full">
                            {{-- imagem atual --}}
                            <img src="{{ asset('img/uploads/' . $destaque->imagem5) }}" alt="" style="width: 100px; height: 100px; margin-top: 10px;">
                        </div>
                        <div class="flex justify-center mt-4">
                            <x-button class="ml-4">
                                {{ __('Cadastrar') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
