<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Titulares') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-clientes>
                        <h1>Número de cuenta: {{$cuenta->numero }}</h1>
                        <table class="table-auto">
                            <thead>
                                <th class="px-6 py-2 text-gray-500">
                                    Dni
                                </th>
                                <th class="px-6 py-2 text-gray-500">
                                    Nombre
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $cliente)
                                    <tr>
                                        <td class="px-6 py-2">{{ $cliente->dni }}</td>
                                        <td class="px-6 py-2">{{ $cliente->nombre }}</td>
                                        <td class="px-6 py-4">
                                            <form action="{{route('eliminar', ['cuenta' => $cuenta, 'cliente' => $cliente])}}" method="post">
                                                @csrf
                                                @method('POST')
                                                <button class="inline-flex bg-red-500 text-black h-6 px-3 justify-center items-center" type="submit">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </x-cuentas>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
