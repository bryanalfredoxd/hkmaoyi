@extends('layouts.app')

@section('content')
<style>
    @font-face {
        font-family: 'Righteous';
        src: url("{{ asset('font/Righteous-Regular.ttf') }}");
        font-weight: 400;
        font-style: normal;
    }
    
    /* Animaciones optimizadas para móviles */
    .text-animate {
        opacity: 0;
        animation-duration: 0.8s;
        animation-fill-mode: both;
    }
    
    .animate__fadeInUp {
        animation-name: fadeInUp;
    }
    
    .animate__fadeInLeft {
        animation-name: fadeInLeft;
    }
    
    .animate__fadeInRight {
        animation-name: fadeInRight;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(15px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-15px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(15px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    /* Estilos responsive */
    .hero-title {
        font-family: 'Righteous', cursive;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
        line-height: 1.3;
    }
    
    .section-title {
        position: relative;
        margin-bottom: 2rem;
    }
    
    .section-title span {
        position: relative;
        z-index: 1;
        padding: 0 1rem;
        background: linear-gradient(to right, #f8f9fa, #ffffff, #f8f9fa);
    }
    
    .section-title:after {
        content: '';
        position: absolute;
        bottom: 10px;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(to right, transparent, #223a66, transparent);
        z-index: 0;
    }
    
    .video-container {
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        border-radius: 8px;
        overflow: hidden;
        margin: 2rem 0;
    }
    
    /* Media Queries */
    @media (max-width: 991.98px) {
        .hero-title {
            font-size: 2.2rem !important;
        }
        
        .hero-text {
            font-size: 1rem !important;
        }
    }
    
    @media (max-width: 767.98px) {
        .page-title {
            padding: 60px 0;
        }
        
        .hero-title {
            font-size: 1.8rem !important;
            margin-top: 1rem;
        }
        
        .section-title {
            font-size: 1.8rem !important;
        }
        
        .section-title span {
            padding: 0 0.5rem;
        }
        
        .text-center-mobile {
            text-align: center !important;
        }
    }
    
    @media (max-width: 575.98px) {
        .hero-title {
            font-size: 1.6rem !important;
        }
        
        .section-title {
            font-size: 1.5rem !important;
        }
        
        .hero-text, .about-text {
            font-size: 0.95rem !important;
            line-height: 1.6 !important;
        }
    }
</style>

<div id="top">
    <!-- Hero Section -->
    <section class="page-title bg-1">
        <div class="overlay2"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2 mt-4 mt-lg-0">
                    <div class="block text-center text-lg-left">
                        <span class="text-white text-animate animate__fadeInUp d-inline-block mb-3" style="animation-delay: 0.2s;">
                            Conoce un poco de nosotros
                        </span>
                        <h1 class="text-capitalize mb-4 hero-title text-animate animate__fadeInUp" style="animation-delay: 0.4s;">
                            HONG KONG MAOYI
                        </h1>
                        <p class="text-white text-animate animate__fadeInUp hero-text" style="animation-delay: 0.6s;">
                            Sobre la base de 14 años de experiencia, siempre hemos puesto a las personas en el centro de todo lo que hacemos. Juntos, estamos comprometidos a inspirar a la fuerza laboral y a las empresas de latinoamerica, ayudando a allanar el camino para quienes ponen sus esfuerzos en los productos hechos en China para que cumplan sus expectativas, y sea un paso de progreso en cada compra.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="video-container text-animate animate__fadeIn" style="animation-delay: 0.8s;">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{ asset('videos/contacto.mp4#t=02') }}" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section about-page py-4 py-lg-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Título "QUIENES SOMOS" -->
                    <h2 class="title-color text-center mb-4 mb-lg-5 section-title text-animate animate__fadeInUp">
                        <span>¿QUIENES SOMOS?</span>
                    </h2>

                    <!-- Texto -->
                    <p class="text-animate animate__fadeInUp about-text text-center-mobile" style="animation-delay: 0.3s;">
                        Con nuestras oficinas en Yiwu, el corazón comercial de la provincia de Zhejiang, e integrados por profesionales locales y de Ecuador, República Dominicana y Venezuela, ponemos toda nuestra experiencia al servicio de los empresarios que buscan un aliado serio, responsable y de confianza.
                    </p>

                    <!-- Video -->
                    <div class="video-container text-animate animate__fadeInUp" style="animation-delay: 0.5s; margin-top: 2rem;">
                        <div class="embed-responsive embed-responsive-16by9">
                            <video class="embed-responsive-item" controls>
                                <source src="{{ asset('videos/video-almacen_1A09fzFo.mp4#t=02') }}" type="video/mp4">
                                Tu navegador no soporta el elemento de video.
                            </video>
                        </div>
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
                const animation = entry.target.getAttribute('data-animation') || 
                                 Array.from(entry.target.classList).find(cls => cls.startsWith('animate__'));
                if (animation) {
                    entry.target.style.animationName = animation.replace('animate__', '');
                }
                observer.unobserve(entry.target);
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