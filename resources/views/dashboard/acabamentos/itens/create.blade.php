<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Novo item') }}
        </h2>
    </x-slot>
    {{-- form to create item with nome e imagem --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('dashboard.acabamentos.itens.store', $acabamento)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="nome" class="sr-only">Nome</label>
                            <input type="text" name="nome" id="nome" placeholder="Nome do item" class="border-2 w-full p-4 rounded-lg @error('nome') border-red-500 @enderror" value="{{old('nome')}}">
                            @error('nome')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="imagem" class="sr-only">Imagem</label>
                            <input type="file" name="imagem" id="imagem" placeholder="Imagem do item" class="border-2 w-full p-4 rounded-lg @error('imagem') border-red-500 @enderror" value="{{old('imagem')}}">
                            @error('imagem')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium">Criar item</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
    