<?php

use Illuminate\Support\Facades\Route;

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