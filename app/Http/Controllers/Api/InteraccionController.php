<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Interaccion;
use App\Http\Requests\StoreInteraccionRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class InteraccionController extends Controller
{
    // POST /interacciones
    public function store(StoreInteraccionRequest $request): JsonResponse
    {
        // Inyectamos el ID del usuario autenticado de forma segura
        $data = $request->validated();
        $data['usuario_id'] = Auth::id(); // Requiere que el usuario esté logueado

        $interaccion = Interaccion::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Interacción registrada exitosamente',
            'data' => $interaccion->load('usuario:id,name')
        ], 201);
    }
}