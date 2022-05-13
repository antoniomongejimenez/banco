<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear movimiento') }}
        </h2>
    </x-slot>

<x-clientes>
    <form action="{{ route('movimientos.store', [], false) }}" method="POST"
          enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="mb-6">
            <label for="cuenta_id"
                class="text-sm font-medium text-gray-900 block mb-2 @error('cuenta_id') text-red-500 @enderror">
                Cuenta_id
            </label>
            <input type="text" name="cuenta_id" id="cuenta_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 @error('cuenta_id') border-red-500 @enderror"
                value="{{ old('cuenta_id', $movimiento->cuenta_id) }}">
            @error('cuenta_id')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="concepto"
                class="text-sm font-medium text-gray-900 block mb-2 @error('concepto') text-red-500 @enderror">
                Concepto
            </label>
            <input type="text" name="concepto" id="concepto"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 @error('concepto') border-red-500 @enderror"
                value="{{ old('concepto', $movimiento->concepto) }}">
            @error('concepto')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="importe"
                class="text-sm font-medium text-gray-900 block mb-2 @error('importe') text-red-500 @enderror">
                Importe
            </label>
            <input type="text" name="importe" id="importe"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 @error('importe') border-red-500 @enderror"
                value="{{ old('importe', $movimiento->importe) }}">
            @error('importe')
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
