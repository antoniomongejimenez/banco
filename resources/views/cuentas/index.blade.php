<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cuentas') }}
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
                                    Número
                                </th>
                                <th class="px-6 py-2 text-gray-500">
                                    Editar
                                </th>
                                <th class="px-6 py-2 text-gray-500">
                                    Borrar
                                </th>
                                <th class="px-6 py-2 text-gray-500">
                                    Mostrar
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($cuentas as $cuenta)
                                    <tr>
                                        <td class="px-6 py-2">{{ $cuenta->numero }}</td>
                                        <td class="px-6 py-4">
                                           <a href="{{ route('cuentas.edit', $cuenta) }}" class="mt-4 text-blue-900 hover:underline">Editar</a>
                                        </td>
                                        <td>
                                            <div class="text-sm text-gray-900 ">
                                                <form action="{{ route('cuentas.destroy', $cuenta) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="px-4 py-1 text-sm text-white bg-red-400 rounded">Borrar</button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{ route('cuentas.show', $cuenta) }}" class="mt-4 text-blue-900 hover:underline">Mostrar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="/cuentas/create" class="mt-4 text-blue-900 hover:underline">Insertar una nueva cuenta</a>
                    </x-cuentas>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
