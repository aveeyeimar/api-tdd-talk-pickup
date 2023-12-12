<?php

namespace App\Http\Controllers\API\Pickups;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreatePickupController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request,CreatePikcup $createPikcup)
    {

        //1. Aplicar servicio
        // - Ventajas:
        //- Mas facil
        //- Mas facil de debuggear
        //- Mas facil de reutilizar

        //2. Hacerlo en el controlador
        // - Ventajas: 
        //   - Ver el codigo en el controlador
        // - Desventajas:
        //    - Complicado debuggear un controlador
        //    - Mas dificil de reutilizar
    

        try {



        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'No se pudo crear la recogida',
                'errors' => [
                    [
                        'title' => 'Algo salio mal',
                        'detail' => $e->getMessage()
                    ]
                ],
                'debug' => app()->environment('local') ? [
                    'line' => $e->getLine(),
                    'file' => $e->getFile(),
                    'trace' => $e->getTrace()
                ] : null
            ], 400);
        }
    }
}
