<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Items do acabamento {{$acabamento->nome}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- listar acabamentos em uma tabela com tailwind --}}
                @if(count($items) > 0)
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
                            @foreach ($items as $item)
                                <tr>
                                    <td class="border px-4 py-2">
                                        <img src="{{asset('img/acabamentos/'.$item->imagem)}}" alt="" class="w-20">
                                    </td>
                                    <td class="border px-4 py-2">{{$item->nome}}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{route('dashboard.acabamentos.itens.edit', $item->id)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                                        <form action="{{route('dashboard.acabamentos.itens.destroy', $item->id)}}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Deletar</button>
                                            {{-- button to lista de itens do acabamento --}}
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                    <p class="text-center">Nenhum item neste acabamento cadastrado</p>
                @endif

                {{-- button to add new product in center --}}

                <div class="flex justify-center mt-4">
                    <a href="{{route('dashboard.acabamentos.itens.create', $acabamento)}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Adicionar item ao acabamento</a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

