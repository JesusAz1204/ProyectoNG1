<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-10">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Directorio de Clientes</h1>
            <a href="{{ route('clientes.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow">
                + Nuevo Cliente
            </a>
        </div>

        <div class="bg-white shadow-sm sm:rounded-lg p-6">
            <!-- Filtros y Búsqueda -->
            <div class="flex flex-col md:flex-row gap-4 mb-6">
                <input type="text" placeholder="Buscar por nombre o empresa..." class="w-full md:w-1/3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <select class="border-gray-300 rounded-md shadow-sm">
                    <option value="">Filtrar por Etapa CRM</option>
                    <option value="Prospecto">Prospecto</option>
                    <option value="Activo">Activo</option>
                    <option value="Frecuente">Frecuente</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
                <select class="border-gray-300 rounded-md shadow-sm">
                    <option value="">Estado</option>
                    <option value="1">Activos</option>
                    <option value="0">Inactivos</option>
                </select>
            </div>

            <!-- Tabla -->
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nombre</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Contacto</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Etapa</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($clientes as $cliente)
                    <tr>
                        <td class="px-6 py-4">
                            <div class="text-sm font-medium text-gray-900">{{ $cliente->nombre }}</div>
                            <div class="text-sm text-gray-500">{{ $cliente->empresa }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">{{ $cliente->correo }}</div>
                            <div class="text-sm text-gray-500">{{ $cliente->telefono }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <!-- Visualización por colores -->
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                {{ $cliente->etapa_crm === 'Prospecto' ? 'bg-blue-100 text-blue-800' : '' }}
                                {{ $cliente->etapa_crm === 'Activo' ? 'bg-green-100 text-green-800' : '' }}
                                {{ $cliente->etapa_crm === 'Frecuente' ? 'bg-purple-100 text-purple-800' : '' }}
                                {{ $cliente->etapa_crm === 'Inactivo' ? 'bg-gray-100 text-gray-800' : '' }}">
                                {{ $cliente->etapa_crm }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm font-medium">
                            <a href="{{ route('clientes.show', $cliente->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Ver Historial</a>
                            <a href="{{ route('clientes.edit', $cliente->id) }}" class="text-blue-600 hover:text-blue-900">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>