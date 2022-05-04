<x-clientes>
    <form action="{{ route('clientes.store', [], false) }}" method="POST"
          enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="mb-6">
            <label for="titulo"
                class="text-sm font-medium text-gray-900 block mb-2 @error('titulo') text-red-500 @enderror">
                Dni
            </label>
            <input type="text" name="titulo" id="titulo"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 @error('titulo') border-red-500 @enderror"
                value="{{ old('titulo', $cliente->dni) }}">
            @error('titulo')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="anyo"
                class="text-sm font-medium text-gray-900 block mb-2 @error('anyo') text-red-500 @enderror">
                Nombre
            </label>
            <input type="text" name="anyo" id="anyo"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 @error('anyo') border-red-500 @enderror"
                value="{{ old('anyo', $cliente->nombre) }}">
            @error('anyo')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Enviar</button>
    </form>
</x-clientes>
