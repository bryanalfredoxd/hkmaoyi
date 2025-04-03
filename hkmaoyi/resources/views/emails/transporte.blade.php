<!DOCTYPE html>
<html>
<head>
    <title>Solicitud de Transporte</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px; }
        .header { background-color: #223a66; color: white; padding: 15px; text-align: center; border-radius: 8px 8px 0 0; }
        .content { padding: 20px; }
        .footer { margin-top: 20px; font-size: 12px; color: #777; text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Solicitud de Cotización de Transporte</h2>
        </div>

        <div class="content">
            <p><strong>Nombre del solicitante:</strong> {{ $nombre }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Puerto de China:</strong> {{ $puerto }}</p>
            <p><strong>Tipo de contenedor:</strong> {{ $tipo }}</p>
            <p><strong>Puerto destino:</strong> {{ $destino }}</p>
            <p><strong>Mensaje adicional:</strong></p>
            <p>{{ $mensaje ?? 'Ninguno' }}</p>
        </div>

        <div class="footer">
            <p>Este correo fue generado automáticamente desde el formulario de contacto.</p>
        </div>
    </div>
</body>
</html>