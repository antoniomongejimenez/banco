<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mostrar cliente') }}
        </h2>
    </x-slot>

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
            <tr>
                <td class="px-6 py-2">{{ $cliente->dni }}</td>
                <td class="px-6 py-2">{{ $cliente->nombre }}</td>
            </tr>
        </tbody>
    </table>
</x-clientes>

</x-app-layout>
