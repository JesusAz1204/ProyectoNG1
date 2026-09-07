<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEtapaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'etapa_crm' => 'required|in:Prospecto,Activo,Frecuente,Inactivo'
        ];
    }
}
