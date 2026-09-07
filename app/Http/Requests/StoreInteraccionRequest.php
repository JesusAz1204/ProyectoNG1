<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInteraccionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'cliente_id' => 'required|exists:clientes,id',
            'tipo' => 'required|in:llamada,correo,reunión',
            'descripcion' => 'required|string',
            'fecha' => 'required|date',
            // No validamos usuario_id aquí porque lo tomaremos del token/sesión por seguridad
        ];
    }
}
