<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MiActividadController;

// Rutas públicas
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas protegidas genéricas (Cualquier usuario logueado)
Route::middleware(['auth'])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('crm.dashboard'); // Vista del dashboard general
    })->name('dashboard');

    // Módulo: Mi Actividad (Evaluación individual)
    Route::get('/mi-actividad', [MiActividadController::class, 'index'])->name('mi-actividad');
    
});

// Rutas exclusivas para Administradores
Route::middleware(['auth', 'role:admin'])->group(function () {
    // Aquí puedes meter vistas o configuraciones que solo el gerente/admin deba ver
    // Ejemplo:
    // Route::get('/reportes-equipo', [ReporteController::class, 'index']);
});

// Ruta de la página principal (El Hero Section)
Route::get('/', function () {
    return view('welcome');
});

// Rutas de navegación del Header
Route::get('/catalogo', function () { return view('catalogo'); });
Route::get('/exclusivos', function () { return view('exclusivos'); });
Route::get('/promociones', function () { return view('promociones'); });
Route::get('/contacto', function () { return view('contacto'); });

// Rutas de los iconos
Route::get('/login', function () { return view('login'); });
Route::get('/carrito', function () { return view('carrito'); });