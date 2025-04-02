<!-- Agrega esto justo antes de cerrar el body (</body>) -->
<a href="https://wa.me/+584129614615?text=Hola,%20me%20interesa%20tu%20servicio" 
   class="whatsapp-float" 
   target="_blank"
   aria-label="Chat por WhatsApp">
   <i class="fab fa-whatsapp"></i>
</a>

<style>
/* Estilo de la burbuja - Asegúrate que esté encima del footer */
.whatsapp-float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 30px; /* Ajusta según la altura de tu footer */
    right: 30px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50%;
    text-align: center;
    font-size: 30px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    z-index: 9999; /* Asegura que esté por encima de todo */
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.whatsapp-float:hover {
    background-color: #128C7E;
    transform: scale(1.1);
}

/* Efecto de pulso opcional */
@keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7); }
    70% { box-shadow: 0 0 0 15px rgba(37, 211, 102, 0); }
    100% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0); }
}

.whatsapp-float.pulse {
    animation: pulse 2s infinite;
}

/* Ajustes para móviles */
@media (max-width: 768px) {
    .whatsapp-float {
        width: 50px;
        height: 50px;
        bottom: 20px;
        right: 20px;
        font-size: 25px;
    }
}

/* Asegúrate que el footer tenga un z-index menor */
.footer {
    position: relative;
    z-index: 1; /* Menor que el del botón de WhatsApp */
}
</style>

<!-- Incluye Font Awesome para el ícono -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<footer class="footer section" style="background: #005151;padding: 0px 0;">    
    <div class="container">
        <div class="footer-btm py-4 mt-5">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div style="text-align: center;" class="copyright text-white">
                        &copy; <?= date('Y') ?> <a href="#" target="_blank" class="text-white">HKMAOYI</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>