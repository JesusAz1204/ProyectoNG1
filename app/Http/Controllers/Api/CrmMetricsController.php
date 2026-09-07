<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Interaccion;
use Illuminate\Http\JsonResponse;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CrmMetricsController extends Controller
{
    /**
     * Retorna las métricas optimizadas para el Dashboard CRM.
     */
    public function index(): JsonResponse
    {
        // 1. Total de clientes (Consulta rápida count)
        $totalClientes = Cliente::count();

        // 2. Comparativa activos vs inactivos optimizada (1 sola consulta agrupada)
        $estadoClientes = Cliente::select('estado', DB::raw('count(*) as total'))
            ->groupBy('estado')
            ->pluck('total', 'estado');
        
        // Mapeo seguro de estados (1 = true/activo, 0 = false/inactivo)
        $activos = $estadoClientes[1] ?? 0;
        $inactivos = $estadoClientes[0] ?? 0;

        // 3. Número de interacciones y promedio por cliente
        $totalInteracciones = Interaccion::count();
        $promedioInteracciones = $totalClientes > 0 
            ? round($totalInteracciones / $totalClientes, 2) 
            : 0;

        // 4. Clientes en riesgo (Sin interacción en los últimos 30 días o sin interacciones previas)
        $limiteFecha = Carbon::now()->subDays(30);
        
        $clientesEnRiesgo = Cliente::whereDoesntHave('interacciones', function ($query) use ($limiteFecha) {
            $query->where('fecha', '>=', $limiteFecha);
        })
        ->where('estado', true) // Solo nos preocupan los clientes activos
        ->select('id', 'nombre', 'correo', 'telefono', 'etapa_crm') // Seleccionamos solo lo necesario para la tabla
        ->orderBy('created_at', 'asc')
        ->take(10) // Limitamos a 10 resultados para no saturar la vista del dashboard
        ->get();

        // Estructura JSON profesional lista para inyectar en el Front-end
        return response()->json([
            'success' => true,
            'data' => [
                'kpis' => [
                    'total_clientes' => $totalClientes,
                    'total_interacciones' => $totalInteracciones,
                    'promedio_interacciones_cliente' => $promedioInteracciones,
                ],
                'graficas' => [
                    'clientes_estado' => [
                        'activos' => $activos,
                        'inactivos' => $inactivos
                    ]
                ],
                'tablas' => [
                    'clientes_en_riesgo' => $clientesEnRiesgo
                ]
            ]
        ], 200);
    }
}