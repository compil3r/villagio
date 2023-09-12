<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('acabamentos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- listar acabamentos em uma tabela com tailwind --}}
                @if(count($acabamentos) > 0)
                <div class="mt-4">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-left">Imagem</th>
                                <th class="px-4 py-2 text-left">Titulo</th>
                                <th class="px-4 py-2 text-left">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($acabamentos as $acabamento)
                                <tr>
                                    <td class="border px-4 py-2">
                                        <img src="{{asset('img/acabamentos/'.$acabamento->imagem)}}" alt="" class="w-20">
                                    </td>
                                    <td class="border px-4 py-2">{{$acabamento->nome}}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{route('dashboard.acabamentos.edit', $acabamento->id)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                                        <form action="{{route('dashboard.acabamentos.destroy', $acabamento->id)}}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Deletar</button>
                                            {{-- button to lista de itens do acabamento --}}
                                            <a href="{{route('dashboard.acabamentos.itens.index', $acabamento->id)}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Itens</a>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                    <p class="text-center">Nenhum acabamento cadastrado</p>
                @endif

                {{-- button to add new product in center --}}

                <div class="flex justify-center mt-4">
                    <a href="{{route('dashboard.acabamentos.create')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Adicionar acabamento</a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

