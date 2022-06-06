<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registros') }}
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
                                    Cuenta
                                </th>
                                <th class="px-6 py-2 text-gray-500">
                                    Cliente
                                </th>
                                <th class="px-6 py-2 text-gray-500">
                                    Operacion
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($registros as $registro)
                                    <tr>
                                        <td class="px-6 py-2">{{ $registro->cuenta->numero }}</td>
                                        <td class="px-6 py-2">{{ $registro->cliente->nombre }}</td>
                                        @if ($registro->operacion_id == 1)
                                            <td class="px-6 py-2 text-green-500">{{ $registro->operacion->operacion}}</td>
                                        @else
                                            <td class="px-6 py-2 text-red-500">{{ $registro->operacion->operacion}}</td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </x-clientes>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
