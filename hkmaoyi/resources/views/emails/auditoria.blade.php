<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #223a66; color: white; padding: 15px; text-align: center; }
        .content { margin: 20px 0; }
        .footer { margin-top: 20px; font-size: 12px; color: #777; text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Solicitud de Auditoría</h2>
        </div>

        <div class="content">
            <p><strong>Nombre:</strong> {{ $nombre }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Tipo de auditoría:</strong> {{ $tipo_auditoria }}</p>
            <p><strong>País:</strong> {{ $pais }}</p>
            <p><strong>Ciudad en China:</strong> {{ $ciudad }}</p>
            <p><strong>Provincia en China:</strong> {{ $provincia }}</p>
        </div>

        <div class="footer">
            <p>Este correo fue generado automáticamente desde el formulario de contacto.</p>
        </div>
    </div>
</body>
</html>