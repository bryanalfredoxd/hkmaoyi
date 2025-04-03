<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VisitasCotizacionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $email;
    public $pais;
    public $ciudad;
    public $provincia;
    public $mensaje;

    public function __construct($nombre, $email, $pais, $ciudad, $provincia, $mensaje)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->pais = $pais;
        $this->ciudad = $ciudad;
        $this->provincia = $provincia;
        $this->mensaje = $mensaje;
    }

    public function build()
    {
        return $this
            ->from('hkmaoyi@gmail.com', 'Hkmaoyi')
            ->subject('Nueva solicitud de visita a China')
            ->view('emails.visitas')
            ->replyTo($this->email, $this->nombre);
    }
}