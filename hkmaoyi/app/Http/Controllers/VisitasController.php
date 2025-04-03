<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\VisitasCotizacionMail;
use Illuminate\Support\Facades\Mail;

class VisitasController extends Controller
{
    public function enviar(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'pais' => 'required',
            'ciudad' => 'required',
            'provincia' => 'required',
            'mensaje' => 'required'
        ]);

        Mail::to('asia@hkmaoyi.com')->send(new VisitasCotizacionMail(
            $request->nombre,
            $request->email,
            $request->pais,
            $request->ciudad,
            $request->provincia,
            $request->mensaje
        ));

        return redirect()->back()->with('success', '¡Solicitud enviada correctamente!');
    }
}