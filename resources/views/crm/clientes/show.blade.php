<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-10 grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <!-- Columna Izquierda: Detalles y Formulario -->
        <div class="lg:col-span-1 space-y-6">
            <!-- Tarjeta Info Cliente -->
            <div class="bg-white shadow-sm rounded-lg p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $cliente->nombre }}</h2>
                <p class="text-gray-600 text-sm mb-4">{{ $cliente->empresa }}</p>
                <div class="space-y-2 text-sm text-gray-700">
                    <p><strong>Correo:</strong> {{ $cliente->correo }}</p>
                    <p><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>
                    <p><strong>Etapa:</strong> {{ $cliente->etapa_crm }}</p>
                </div>
            </div>

            <!-- Formulario de Interacción -->
            <div class="bg-white shadow-sm rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Registrar Interacción</h3>
                <form action="{{ route('interacciones.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="cliente_id" value="{{ $cliente->id }}">
                    
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Tipo</label>
                        <select name="tipo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            <option value="llamada">Llamada</option>
                            <option value="correo">Correo</option>
                            <option value="reunión">Reunión</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Fecha</label>
                        <input type="datetime-local" name="fecha" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Descripción</label>
                        <textarea name="descripcion" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required></textarea>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow">
                        Guardar Interacción
                    </button>
                </form>
            </div>
        </div>

        <!-- Columna Derecha: Timeline (Línea de tiempo) -->
        <div class="lg:col-span-2 bg-white shadow-sm rounded-lg p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-6">Historial Centralizado</h3>
            
            <div class="relative border-l border-gray-200 ml-3">
                @foreach($cliente->interacciones as $interaccion)
                <div class="mb-8 ml-6">
                    <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -left-3 ring-8 ring-white">
                        <!-- Icono SVG simple (puedes cambiarlos según el tipo de interacción) -->
                        <svg class="w-3 h-3 text-blue-800" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <h4 class="mb-1 flex items-center text-md font-semibold text-gray-900 uppercase">
                        {{ $interaccion->tipo }}
                    </h4>
                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400">
                        {{ \Carbon\Carbon::parse($interaccion->fecha)->format('d M Y, h:i A') }} - Registrado por {{ $interaccion->usuario->name }}
                    </time>
                    <p class="text-base font-normal text-gray-500 bg-gray-50 p-3 rounded-md border border-gray-100">
                        {{ $interaccion->descripcion }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</x-app-layout>