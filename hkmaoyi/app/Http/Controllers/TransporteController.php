<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TransporteCotizacionMail;
use Illuminate\Support\Facades\Mail;

class TransporteController extends Controller
{
    public function enviar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'puerto' => 'required|string',
            'tipo' => 'required|string',
            'destino' => 'required|string',
            'mensaje' => 'nullable|string'
        ]);

        try {
            Mail::to('asia@hkmaoyi.com')->send(new TransporteCotizacionMail(
                $request->nombre,
                $request->email,
                $request->puerto,
                $request->tipo,
                $request->destino,
                $request->mensaje
            ));

            return redirect('/')->with('success', '¡Solicitud enviada correctamente!');

    } catch (\Exception $e) {
        return redirect('/')->with('error', 'Error al enviar: ' . $e->getMessage());
    }
    }
}