<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interaccion;
use Illuminate\Support\Facades\Auth;

class MiActividadController extends Controller
{
    /**
     * Muestra la pantalla "Mi Actividad" con el historial centralizado del usuario.
     */
    public function index()
    {
        // Recuperamos las interacciones exclusivas del usuario autenticado
        // Usamos Eager Loading ('cliente') para evitar el problema N+1 al mostrar el nombre del cliente
        $actividades = Interaccion::with('cliente:id,nombre,empresa')
                                  ->where('usuario_id', Auth::id())
                                  ->orderBy('fecha', 'desc')
                                  ->paginate(15);

        // Retornamos la vista (que crearemos en el siguiente paso) con los datos
        return view('crm.mi-actividad', compact('actividades'));
    }
}