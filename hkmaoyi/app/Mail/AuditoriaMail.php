<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AuditoriaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $email;
    public $tipo_auditoria;
    public $pais;
    public $ciudad;
    public $provincia;

    public function __construct($nombre, $email, $tipo_auditoria, $pais, $ciudad, $provincia)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->tipo_auditoria = $tipo_auditoria;
        $this->pais = $pais;
        $this->ciudad = $ciudad;
        $this->provincia = $provincia;
    }

    public function build()
    {
        return $this
            ->from('hkmaoyi@gmail.com', 'Hkmaoyi')
            ->subject('Solicitud de auditoría')
            ->view('emails.auditoria')
            ->replyTo($this->email, $this->nombre);
    }
}