<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AuditoriaMail;
use Illuminate\Support\Facades\Mail;

class AuditoriaController extends Controller
{
    public function enviar(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'tipo_auditoria' => 'required',
            'pais' => 'required',
            'ciudad' => 'required',
            'provincia' => 'required'
        ]);

        $destinatarios = ['asia@hkmaoyi.com', 'gerenciacorpoasia@gmail.com'];
        
        Mail::to($destinatarios)->send(new AuditoriaMail(
            $request->nombre,
            $request->email,
            $request->tipo_auditoria,
            $request->pais,
            $request->ciudad,
            $request->provincia
        ));

        return redirect()->back()->with('success', '¡Solicitud de auditoría enviada correctamente!');
    }
}