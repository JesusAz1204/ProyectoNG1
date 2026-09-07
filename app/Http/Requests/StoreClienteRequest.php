<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Asumimos que el middleware de auth protege la ruta
    }

    public function rules(): array
    {
        return [
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|unique:clientes,correo',
            'telefono' => 'required|string|max:20',
            'empresa' => 'nullable|string|max:255',
            'estado' => 'boolean',
            'etapa_crm' => 'in:Prospecto,Activo,Frecuente,Inactivo'
        ];
    }
}
