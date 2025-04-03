<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TransporteCotizacionMail extends Mailable
{
    use Queueable, SerializesModels;

    // Datos que se pasarán a la vista del correo
    public $nombre;
    public $email;
    public $puerto;
    public $tipo;
    public $destino;
    public $mensaje;

    /**
     * Constructor: Recibe los datos del formulario
     */
    public function __construct($nombre, $email, $puerto, $tipo, $destino, $mensaje)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->puerto = $puerto;
        $this->tipo = $tipo;
        $this->destino = $destino;
        $this->mensaje = $mensaje;
    }

    /**
     * Construye el mensaje de correo
     */
    public function build()
    {
        return $this
            ->subject('Nueva solicitud de cotización de transporte') // Asunto del correo
            ->view('emails.transporte') 
            ->replyTo($this->email, $this->nombre); // Responder al solicitante
    }
}