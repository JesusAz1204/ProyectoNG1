<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClienteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => 'sometimes|required|string|max:255',
            'correo' => 'sometimes|required|email|unique:clientes,correo,' . $this->route('cliente')->id,
            'telefono' => 'sometimes|required|string|max:20',
            'empresa' => 'nullable|string|max:255',
            'estado' => 'boolean',
        ];
    }
}