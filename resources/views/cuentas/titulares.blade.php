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
