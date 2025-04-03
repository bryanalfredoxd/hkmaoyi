@extends('layouts.app')

@section('content')

<?php
if(isset($_GET['enviado'])){
     echo'<script type="text/javascript">
           alert("Correo enviado..");
        </script>';
}
if(isset($_GET['error'])){
     echo'<script type="text/javascript">
           alert("Error enviado..");
        </script>';
}
?>

<style>
    @font-face {
        font-family: Lato;
        src: url("font/Righteous-Regular.ttf");
        font-weight: 400;
        font-style: cursive;
    }
    
    /* Estilos responsive personalizados */
    .video-responsive-container {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
        height: 0;
        overflow: hidden;
        margin-bottom: 20px;
    }
    
    .video-responsive-container iframe,
    .video-responsive-container video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    
    .carousel-item img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }
    
    .service-list li {
        padding: 8px 0;
    }
    
    /* Ajustes para móviles */
    @media (max-width: 768px) {
        .page-title {
            padding: 40px 0;
        }
        
        .page-title h1 {
            font-size: 1.8rem;
        }
        
        .modal-body .row {
            flex-direction: column;
        }
        
        .modal-body .col-6 {
            width: 100%;
            max-width: 100%;
        }
        
        .carousel-caption h3 {
            font-size: 1.2rem;
        }
    }
    
    /* Ajustes para tablets */
    @media (min-width: 768px) and (max-width: 992px) {
        .about-content {
            padding-left: 0 !important;
        }
    }
    
    /* Ajustes para pantallas muy pequeñas */
    @media (max-width: 576px) {
        .page-title h1 {
            font-size: 1.5rem;
        }
        
        .carousel-caption h3 {
            font-size: 1rem;
            padding: 5px !important;
        }
        
        .modal-title {
            font-size: 1.2rem !important;
        }
    }
</style>

<div class="top">
    <!-- Sección Hero -->
    <section class="page-title bg-1">
        <div class="overlay2"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 order-lg-1 order-2">
                    <div class="block text-center text-lg-start py-4 py-lg-0">
                        <span class="text-white">Te ayudamos a llegar a las mejores</span>
                        <h1 class="mb-4 text-lg">Ferias y mercados mayoristas.</h1>
                    </div>
                </div>
                <div class="col-12 col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0">
                    <div class="video-responsive-container rounded">
                        <iframe src="videos/ferias.mp4" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Principal -->
    <section class="section about py-5">
        <div class="container">
            <div class="row">
                <!-- Columna izquierda (servicios y carrusel) -->
                <div class="col-12 col-lg-4 mb-5 mb-lg-0">
                    <div class="row">
                        <div class="col-12">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="images/image1.jpeg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/image2.jpeg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/image3.jpeg" alt="Third slide">
                                    </div>
                                    <div style="mar" class="carousel-item">
                                        <img class="d-block w-100" src="images/image4.jpeg" alt="Fourth slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/image5.jpeg" alt="Fifth slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/image6.jpeg" alt="Sixth slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <br>
                            <center>
                                <a href="https://www.cantonfair.org.cn/en-US" target="_blank" class="btn btn-main-2 btn-round-full btn-icon">
                                    Ver Ferias<i class="icofont-simple-right ml-3"></i>
                                </a>
                            </center>
                        </div>
                        
                        <div class="col-12 mt-4">
                            <div class="about-content mt-4 mt-lg-0">
                                <h3 class="mb-4">Nuestros servicios</h3>
                                <div class="divider my-4"></div>
                                <ul class="list-unstyled department-service service-list">
                                    <li><i class="bi bi-person-check me-2"></i> Registrar al visitante</li>
                                    <li><i class="bi bi-airplane me-2"></i> Recepción en el aeropuerto</li>
                                    <li><i class="bi bi-car-front me-2"></i> Traslados del hotel a las ferias</li>
                                    <li><i class="bi bi-translate me-2"></i> Traducción y asistencia</li>
                                    <li><i class="bi bi-building me-2"></i> Coordinación de visitas a fábricas</li>
                                    <li><i class="bi bi-geo-alt me-2"></i> Traslados internos en China y despedida en aeropuerto</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Columna derecha (carrusel de videos) -->
                <div class="col-12 col-lg-8">
                    <div class="about-content mt-4 mt-lg-0">
                        <div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
                                <li data-target="#video-carousel-example2" data-slide-to="1"></li>
                                <li data-target="#video-carousel-example2" data-slide-to="2"></li>
                            </ol>
                            
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="video-responsive-container">
                                        <video class="video-fluid" autoplay loop muted>
                                            <source src="videos/video1.mp4" type="video/mp4" />
                                        </video>
                                    </div>
                                    <div class="carousel-caption">
                                        <div class="animated fadeInDown" style="background: #223a6696;">
                                            <h3 class="h3-responsive text-white p-2">Feria</h3>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="carousel-item">
                                    <div class="video-responsive-container">
                                        <video class="video-fluid" autoplay loop muted>
                                            <source src="videos/video2.mp4" type="video/mp4" />
                                        </video>
                                    </div>
                                    <div class="carousel-caption">
                                        <div class="animated fadeInDown" style="background:#223a6696;">
                                            <h3 class="h3-responsive text-white p-2">Feria</h3>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="carousel-item">
                                    <div class="video-responsive-container">
                                        <video class="video-fluid" autoplay loop muted>
                                            <source src="videos/video3.mp4" type="video/mp4" />
                                        </video>
                                    </div>
                                    <div class="carousel-caption">
                                        <div class="animated fadeInDown" style="background: #223a6696;">
                                            <h3 class="h3-responsive text-white p-2">Mercado YIWU</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        
                        <br>
                        <center>
                            <h4 class="title-color text-center mb-4">Te llevamos a las mejores ferias y mercados.</h4>
                            <a href="#" class="btn btn-main-2 btn-round-full btn-icon" data-toggle="modal" data-target="#visitas">
                                Solicite una cotización<i class="icofont-simple-right ml-3"></i>
                            </a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="instagram-container">
        <div class="container">
            <h2 class="section-title">Últimas Publicaciones</h2>
            <div class="row g-4">
                <!-- Publicación 1 -->
                <div class="col-md-4">
                    <div class="instagram-card">
                        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/DH5XMfMvNIG/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14"></blockquote>
                    </div>
                </div>
                
                <!-- Publicación 2 -->
                <div class="col-md-4">
                    <div class="instagram-card">
                        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/DH3cUyfgpTX/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14"></blockquote>
                    </div>
                </div>
                
                <!-- Publicación 3 -->
                <div class="col-md-4">
                    <div class="instagram-card">
                        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/DHzlIKavkYm/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14"></blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal de contacto -->
    <div class="modal fade" id="visitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);">
                <div class="modal-header d-flex align-items-center justify-content-between" style="background-color: #223a66; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                    <h5 class="modal-title text-center w-100 mb-0" style="color: white; font-size: 1.5rem;">
                        Solicitar el servicio de visita
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form class="appoinment-form" method="POST" action="http://corpoasia.synology.me/email/ma.php">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label" style="font-weight: bold;">
                                        <i class="bi bi-person me-2"></i> Nombre del solicitante
                                    </label>
                                    <input type="text" class="form-control" id="recipient-name" name="nombre" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label" style="font-weight: bold;">
                                        <i class="bi bi-envelope me-2"></i> Email
                                    </label>
                                    <input type="text" class="form-control" id="recipient-name" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label" style="font-weight: bold;">
                                        <i class="bi bi-globe me-2"></i> País
                                    </label>
                                    <select class="form-control" name="pais" required>
                                        <option>Venezuela</option>
                                        <option>Usa</option>
                                        <option>Ecuador</option>
                                        <option>Colombia</option>
                                        <option>República Dominicana</option>
                                        <option>Panamá</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label" style="font-weight: bold;">
                                        <i class="bi bi-geo-alt me-2"></i> Ciudad en China
                                    </label>
                                    <input type="text" class="form-control" id="recipient-name" name="ciudad" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label" style="font-weight: bold;">
                                        <i class="bi bi-geo-alt-fill me-2"></i> Provincia en China
                                    </label>
                                    <input type="text" class="form-control" id="recipient-name" name="provincia" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label" style="font-weight: bold;">
                                        <i class="bi bi-chat-left-text me-2"></i> Mensaje
                                    </label>
                                    <textarea class="form-control" id="recipient-name" name="mensaje" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer" style="display: flex; justify-content: center; border-top: none;">
                            <button type="submit" class="btn btn-round-full btn-primary" name="visitas" style="background-color: #223a66; border: none; padding: 10px 30px; font-size: 1rem; border-radius: 25px;">
                                ENVIAR
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Instagram Embed Script -->
<script async src="//www.instagram.com/embed.js"></script>
    
<!-- Script para cargar dinámicamente los embeds -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Espera a que el script de Instagram esté cargado
        if (typeof instgrm !== 'undefined') {
            instgrm.Embeds.process();
        } else {
            // Si no está cargado, reintentar después de 500ms
            setTimeout(function() {
                if (typeof instgrm !== 'undefined') {
                    instgrm.Embeds.process();
                }
            }, 500);
        }
    });
</script>

<style>
    .instagram-container {
        padding: 2rem 0;
        background-color: #f8f9fa;
    }
    .instagram-card {
        transition: all 0.3s ease;
        margin-bottom: 1.5rem;
        border: none;
        border-radius: 0.5rem;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .instagram-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    }
    .instagram-media {
        width: 100%;
        min-height: 300px;
        border: 0;
    }
    .section-title {
        position: relative;
        margin-bottom: 2rem;
        text-align: center;
    }
    .section-title:after {
        content: "";
        display: block;
        width: 80px;
        height: 3px;
        background: #E1306C;
        margin: 15px auto;
    }
</style>
@endsection