@extends('layouts.app')
@section('title', 'Supervise sus compras con FUTIAN')
@section('content')
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="hkmaoyi,importaciones,china,china">
<meta name="author" content="corpoasia.com">

<style>
    /* Animaciones para el texto */
    .text-animate {
        opacity: 0;
        animation: fadeInUp 1s forwards;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .delay-1 { animation-delay: 0.3s; }
    .delay-2 { animation-delay: 0.6s; }
    .delay-3 { animation-delay: 0.9s; }
    
    /* Mejoras estéticas para el texto */
    .app-feature li {
        margin-bottom: 15px;
        padding-left: 35px;
        position: relative;
        line-height: 1.6;
    }
    
    .app-feature i {
        position: absolute;
        left: 0;
        top: 3px;
        font-size: 1.4rem;
    }
    
    .video-container {
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        border-radius: 10px;
        overflow: hidden;
    }
    
    .download-btn {
        transition: all 0.3s ease;
        padding: 12px 30px;
        font-size: 1.1rem;
        margin: 10px 5px;
    }
    
    .download-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .content-text {
        line-height: 1.8;
        font-size: 1.1rem;
    }
</style>

<div class="top">
    <section class="page-title bg-4">
        <div class="overlay2"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white text-animate">Supervise sus compras con FUTIAN</span>
                        <h1 class="text-capitalize mb-5 text-lg text-animate delay-1">Fue creada para ahorrar tiempo</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-content pl-4 mt-4 mt-lg-0 text-center text-animate delay-1">
                        <p class="content-text text-justify">
                            Nuestra APP I-Yiwu para ANDROID, fue creada para ser la herramienta que complementa el trabajo en la visita al mercado FUTIAN pues se tiene que manejar una extensa información de órdenes de compra, fotos y detalles de los productos y a la vez ir calculando los metros cúbicos para no comprar poco o mucho ya que cualquiera de las dos cosas son un problema al momento de llenar su contenedor.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 mt-4">
                    <div class="about-img text-center text-animate delay-2">
                        <div class="position-relative" style="height: 400px;">
                            <img src="images/mobile1.png" width="200" class="position-absolute" style="left: 50px; top: 20px; z-index: 2;">
                            <img src="images/mobile2.png" width="200" class="position-absolute" style="right: 50px; bottom: 20px; z-index: 1;">
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-8 mt-4">
                    <div class="about-content pl-4 mt-4 mt-lg-0 text-animate delay-2">
                        <div class="video-container">
                            <div class="embed-responsive embed-responsive-16by9">
                                <video class="embed-responsive-item" controls>
                                    <source src="http://corpofutian.com/video_promo.mp4#t=01" type="video/mp4">
                                    Tu navegador no soporta el elemento de video.
                                </video>
                            </div>
                        </div>
                        <p class="content-text text-justify mt-4 text-animate delay-3">
                            Con I-YIWU, puede ir teniendo un registro diario de sus visitas a cada proveedor sin estar lleno de tantas tarjetas de presentación y al final de la jornada revisar con cuidado en donde le conviene hacer su compra. Esta APP es gratuita por 20 días y su afiliación anual solo vale 100$, observe el video de presentación y encontrara más detalles sobre la forma en que ella trabaja.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-6 mt-5">
                    <div class="about-content pl-4 mt-4 mt-lg-0 text-animate delay-1">
                        <h3 class="mb-4">Funciones destacadas</h3>
                        <div class="divider my-4" style="background: #007bff; height: 2px;"></div>
                        <ul class="app-feature text-justify">
                            <li class="delay-2">
                                <i class="bi bi-person-badge text-primary"></i>
                                Registra cada proveedor con su tarjeta de la tienda.
                            </li>
                            <li class="delay-2">
                                <i class="bi bi-box-seam text-primary"></i>
                                Registra cada producto que sea de su interés con la información completa para calcular posteriormente su inversión y prioridades de compra.
                            </li>
                            <li class="delay-3">
                                <i class="bi bi-people text-primary"></i>
                                Es multi usuario y puede tener a la vez dos o tres asistentes trabajando con recolectar la información de sus productos.
                            </li>
                            <li class="delay-3">
                                <i class="bi bi-laptop text-primary"></i>
                                Sus productos e información van siendo vistos en varios dispositivos en tiempo real.
                            </li>
                            <li class="delay-3">
                                <i class="bi bi-house-door text-primary"></i>
                                Puede ver el listado cuando sus productos son recibidos en la bodega.
                            </li>
                            <li class="delay-3">
                                <i class="bi bi-truck text-primary"></i>
                                Puede ver el listado cuando sus productos son embarcados en el contenedor y saber si se han quedado cajas en la bodega.
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-6 mt-5 text-center text-animate delay-2">
                    <div class="feature-block">
                        <img src="http://corpofutian.com/logo.PNG" width="180" class="mb-4"><br>
                        <img src="http://corpofutian.com/qr2.PNG" width="200" class="mb-4">
                        
                        <br>
                            <a class="btn btn-round-full btn-success download-btn delay-3" href="http://corpofutian.com/I-FUTIAN-1.apk" download>
                                <i class="bi bi-google-play"></i> APP Descargar
                            </a>
                            
                            <a class="btn btn-primary btn-round-full download-btn delay-3" href="http://corpofutian.com/manual.pdf" download>
                                <i class="bi bi-filetype-pdf"></i> Manual de usuarios
                            </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animación al hacer scroll
    const animateElements = document.querySelectorAll('.text-animate');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.animationPlayState = 'running';
            }
        });
    }, {threshold: 0.1});

    animateElements.forEach(el => {
        el.style.opacity = 0;
        observer.observe(el);
    });
});
</script>

@endsection