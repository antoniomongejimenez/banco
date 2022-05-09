<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear cuenta') }}
        </h2>
    </x-slot>

<x-clientes>
    <form action="{{ route('cuentas.store', [], false) }}" method="POST"
          enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="mb-6">
            <label for="numero"
                class="text-sm font-medium text-gray-900 block mb-2 @error('numero') text-red-500 @enderror">
                Número
            </label>
            <input type="text" name="numero" id="numero"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 @error('numero') border-red-500 @enderror"
                value="{{ old('numero', $cuenta->numero) }}">
            @error('numero')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Enviar</button>
    </form>
</x-clientes>

</x-app-layout>
