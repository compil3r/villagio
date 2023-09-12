<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar categoria') }}
        </h2>
    </x-slot>
    {{-- form to create new ano com titulo e descrição --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {{-- show errors in tailwind style --}}

                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Erro!</strong>
                        <span class="block sm:inline">Por favor, corrija os erros abaixo.</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                            </svg>
                        </span>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('dashboard.categorias.update', $categoria)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="titulo">Titulo</label>
                            <input type="text" name="titulo" id="titulo" value="{{$categoria->titulo}}" placeholder="Titulo" class="w-full rounded-lg @error('titulo') border-red-500 @enderror" value="{{old('titulo')}}">
                            @error('titulo')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                       {{-- imagem --}}
                        <div class="mb-4">
                            <label for="imagem">Imagem</label>
                            <input type="file" name="imagem" id="imagem" placeholder="Imagem" class="w-full rounded-lg @error('imagem') border-red-500 @enderror" value="{{old('imagem')}}">
                            @error('imagem')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{$message}}
                                </div>
                            @enderror

                            {{-- show atual image --}}
                            <div class="mt-4">
                                <img src="{{asset('img/uploads/categorias/' . $categoria->imagem)}}" alt="" style="max-width: 400px">
                            </div>
                        </div>
                        <div style="text-align: center">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

