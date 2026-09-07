<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'correo',
        'telefono',
        'empresa',
        'fecha_registro',
        'estado',
        'etapa_crm'
    ];

    protected $casts = [
        'estado' => 'boolean',
        'fecha_registro' => 'datetime',
    ];

    // Relación: Un cliente tiene muchas interacciones
    public function interacciones(): HasMany
    {
        return $this->hasMany(Interaccion::class);
    }
}