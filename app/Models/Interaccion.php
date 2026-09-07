<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Interaccion extends Model
{
    use HasFactory;

    // Forzar el nombre de la tabla para evitar problemas de pluralización en español
    protected $table = 'interacciones'; 

    protected $fillable = [
        'cliente_id',
        'usuario_id',
        'tipo',
        'descripcion',
        'fecha'
    ];

    protected $casts = [
        'fecha' => 'datetime',
    ];

    // Relación: Una interacción pertenece a un cliente
    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class);
    }

    // Relación: Una interacción pertenece a un usuario (quien la registró)
    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
