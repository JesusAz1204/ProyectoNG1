<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClienteController;
use App\Http\Controllers\Api\InteraccionController;
use App\Http\Controllers\Api\CrmMetricsController;

// ... (rutas anteriores de clientes e interacciones)

// Endpoint exclusivo para el Dashboard analítico
Route::get('/dashboard/metricas', [CrmMetricsController::class, 'index']);

// Protegemos todas las rutas con el middleware auth:sanctum (estándar para APIs en Laravel)
Route::middleware('auth:sanctum')->group(function () {
    
    // Rutas CRUD de Clientes (Crea automáticamente GET, POST, PUT, DELETE)
    Route::apiResource('clientes', ClienteController::class);
    
    // Endpoint específico para cambiar la etapa
    Route::put('/clientes/{cliente}/etapa', [ClienteController::class, 'updateEtapa']);
    
    // Endpoint para obtener las interacciones de un cliente
    Route::get('/clientes/{cliente}/interacciones', [ClienteController::class, 'getInteracciones']);
    
    // Ruta para registrar interacciones
    Route::post('/interacciones', [InteraccionController::class, 'store']);
    
});