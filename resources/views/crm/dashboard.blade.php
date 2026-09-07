<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard CRM
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- KPIs (Contadores) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8" id="kpi-container">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-blue-500">
                    <div class="text-gray-500 text-sm font-medium uppercase">Total de Clientes</div>
                    <div class="text-3xl font-bold text-gray-900" id="kpi-total-clientes">...</div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-green-500">
                    <div class="text-gray-500 text-sm font-medium uppercase">Clientes Activos</div>
                    <div class="text-3xl font-bold text-gray-900" id="kpi-activos">...</div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-purple-500">
                    <div class="text-gray-500 text-sm font-medium uppercase">Interacciones / Cliente</div>
                    <div class="text-3xl font-bold text-gray-900" id="kpi-promedio">...</div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Gráfica -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 lg:col-span-1">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Estado de Clientes</h3>
                    <canvas id="crmChart" width="400" height="400"></canvas>
                </div>

                <!-- Tabla de Clientes en Riesgo -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 lg:col-span-2">
                    <h3 class="text-lg font-semibold text-red-600 mb-4">Atención Requerida: Clientes en Riesgo</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 text-sm">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-3 text-left font-medium text-gray-500 uppercase">Nombre</th>
                                    <th class="px-4 py-3 text-left font-medium text-gray-500 uppercase">Teléfono</th>
                                    <th class="px-4 py-3 text-left font-medium text-gray-500 uppercase">Etapa CRM</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white" id="tabla-riesgo-body">
                                <!-- Llenado vía JS -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script para consumir la API y renderizar la gráfica -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('/api/dashboard/metricas', {
                headers: {
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('token') // Ajusta según tu manejo de tokens
                }
            })
            .then(response => response.json())
            .then(res => {
                const data = res.data;
                // Llenar KPIs
                document.getElementById('kpi-total-clientes').innerText = data.kpis.total_clientes;
                document.getElementById('kpi-activos').innerText = data.graficas.clientes_estado.activos;
                document.getElementById('kpi-promedio').innerText = data.kpis.promedio_interacciones_cliente;

                // Renderizar Gráfica
                const ctx = document.getElementById('crmChart').getContext('2d');
                new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Activos', 'Inactivos'],
                        datasets: [{
                            data: [data.graficas.clientes_estado.activos, data.graficas.clientes_estado.inactivos],
                            backgroundColor: ['#10B981', '#6B7280'],
                        }]
                    }
                });

                // Llenar Tabla
                const tbody = document.getElementById('tabla-riesgo-body');
                data.tablas.clientes_en_riesgo.forEach(cliente => {
                    tbody.innerHTML += `
                        <tr>
                            <td class="px-4 py-3 font-medium text-gray-900">${cliente.nombre}</td>
                            <td class="px-4 py-3 text-gray-500">${cliente.telefono}</td>
                            <td class="px-4 py-3"><span class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs font-semibold">${cliente.etapa_crm}</span></td>
                        </tr>
                    `;
                });
            });
        });
    </script>
</x-app-layout>