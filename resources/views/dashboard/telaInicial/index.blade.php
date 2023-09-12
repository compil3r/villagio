<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tela Inicial') }}
        </h2>
    </x-slot>
    {{-- form to create new product with titulo, subtitulo, descricao, select categoria, imagem, without preco --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {{-- show errors in tailwind style --}}

                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Erro!</strong>
                        <span class="block sm:inline">Por favor, corrija os erros abaixo.</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                        </span>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('dashboard.telaInicial.store')}}" method="post" enctype="multipart/form-data">
                        {{--token--}}
                        @csrf
                        {{--titulo--}}
                        <div class="grid grid-cols-1 gap-4">
                            
                            <div>
                                <x-label for="imagem" :value="__('Capa')" />
                                <x-input id="imagem" class="block mt-1 w-full" type="file" name="imagemInicial" wire:model="imagem"  autofocus />
                                {{-- imagem atual --}}
                                <div class="mt-4">
                                    <img src="{{asset('img/uploads/'.$telaInicial->imagemInicial)}}" alt="imagem atual">
                                </div>
                            </div>
                            {{-- select for multiple images --}}
                            <div>
                                <x-label for="textoInicial" :value="__('Texto Inicial')" />
                                <textarea name="textoInicial" class="w-full description">{{$telaInicial->textoInicial}}</textarea>
                            </div>
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

