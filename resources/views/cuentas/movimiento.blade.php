<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Movimientos') }}
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
                                    Fecha
                                </th>
                                <th class="px-6 py-2 text-gray-500">
                                    Concepto
                                </th>
                                <th class="px-6 py-2 text-gray-500">
                                    Importe
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($movimientos as $movimiento)
                                    <tr>
                                        <td class="px-6 py-2">{{ $movimiento->fecha}}</td>
                                        <td class="px-6 py-2">{{ $movimiento->concepto}}</td>
                                        @if ($movimiento->importe >= 0)
                                            <td class="px-6 py-2 text-green-500">{{ $movimiento->importe}}</td>
                                        @else
                                            <td class="px-6 py-2 text-red-500">{{ $movimiento->importe}}</td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if ($saldo->movimientos_sum_importe >= 0)
                            <a class="text-green-500">Saldo: {{$saldo->movimientos_sum_importe}}</a>
                        @else
                            <a class="text-red-500">Saldo: {{$saldo->movimientos_sum_importe}}</a>
                        @endif
                    </x-clientes>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
