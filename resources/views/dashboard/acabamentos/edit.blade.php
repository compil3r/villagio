<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Acabamento') }}
        </h2>
    </x-slot>

    {{-- form to edit acabamento --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('dashboard.acabamentos.update', $acabamento->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                
                        <div class="mb-4">
                            <label for="nome" class="sr-only">Titulo</label>
                            <input type="text" name="titulo" id="nome" placeholder="Nome do acabamento" class="border-2 w-full p-4 rounded-lg @error('nome') border-red-500 @enderror" value="{{$acabamento->nome}}">
                            @error('nome')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        {{-- descricao --}}
                        <div class="mb-4">
                            <label for="descricao" class="sr-only">Descrição</label>
                            <textarea name="descricao" id="descricao" cols="30" rows="4" placeholder="Descrição do acabamento" class="border-2 w-full p-4 rounded-lg @error('descricao') border-red-500 @enderror">{{$acabamento->descricao}}</textarea>
                            @error('descricao')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="imagem" class="sr-only">Imagem</label>
                            <input type="file" name="imagem" id="imagem" placeholder="Imagem do acabamento" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('imagem') border-red-500 @enderror" value="{{$acabamento->imagem}}">
                            @error('imagem')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{$message}}
                                </div>
                            @enderror
                            {{-- link (a href) to atual image --}}
                            <a href="{{asset('img/acabamentos/'.$acabamento->imagem)}}" target="_blank">Ver imagem atual</a>
                        </div>
                        <div class="mb-4 text-center">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium">Atualizar Acabamento</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
