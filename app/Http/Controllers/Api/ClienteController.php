<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Http\Requests\UpdateEtapaRequest;
use Illuminate\Http\JsonResponse;

class ClienteController extends Controller
{
    // GET /clientes
    public function index(): JsonResponse
    {
        // Paginación para estándar profesional
        $clientes = Cliente::orderBy('created_at', 'desc')->paginate(15);
        
        return response()->json([
            'success' => true,
            'data' => $clientes
        ], 200);
    }

    // POST /clientes
    public function store(StoreClienteRequest $request): JsonResponse
    {
        $cliente = Cliente::create($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Cliente creado exitosamente',
            'data' => $cliente
        ], 201); // 201 Created
    }

    // GET /clientes/{id}
    public function show(Cliente $cliente): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $cliente
        ], 200);
    }

    // PUT /clientes/{id}
    public function update(UpdateClienteRequest $request, Cliente $cliente): JsonResponse
    {
        $cliente->update($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Cliente actualizado exitosamente',
            'data' => $cliente
        ], 200);
    }

    // DELETE /clientes/{id}
    public function destroy(Cliente $cliente): JsonResponse
    {
        $cliente->delete();

        return response()->json(null, 204); // 204 No Content
    }

    // PUT /clientes/{id}/etapa
    public function updateEtapa(UpdateEtapaRequest $request, Cliente $cliente): JsonResponse
    {
        $cliente->update([
            'etapa_crm' => $request->etapa_crm
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Etapa CRM actualizada',
            'data' => $cliente
        ], 200);
    }

    // GET /clientes/{id}/interacciones
    public function getInteracciones(Cliente $cliente): JsonResponse
    {
        // Cargamos las interacciones con el nombre del usuario que las registró
        $interacciones = $cliente->interacciones()
                                 ->with('usuario:id,name')
                                 ->orderBy('fecha', 'desc')
                                 ->get();

        return response()->json([
            'success' => true,
            'data' => $interacciones
        ], 200);
    }
}