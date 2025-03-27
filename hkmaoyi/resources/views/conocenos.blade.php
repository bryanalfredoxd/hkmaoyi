@extends('layouts.app')

@section('content')
<style>
    @font-face {
        font-family: Lato;
        src: url("{{ asset('font/Righteous-Regular.ttf') }}");
        font-weight: 400;
        font-style: cursive;
    }
    
    /* Animaciones para el texto */
    .text-animate {
        opacity: 0;
        animation-duration: 1s;
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
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>

<div id="top">
    <section class="page-title bg-1">
        <div class="overlay2"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="block text-center text-md-left">
                        <span class="text-white text-animate animate__fadeInUp" style="display: inline-block; animation-delay: 0.2s;">Conoce un poco de nosotros</span>
                        <h1 class="text-capitalize mb-4 text-lg text-animate animate__fadeInUp" style="animation-delay: 0.4s; font-family: 'Lato', cursive; color: #fff; text-shadow: 1px 1px 3px rgba(0,0,0,0.3);">HONG KONG MAOYI</h1>
                        <p class="text-white text-animate animate__fadeInUp" style="text-align: justify; animation-delay: 0.6s; line-height: 1.8; font-size: 1.1rem;">
                            Sobre la base de 14 años de experiencia, siempre hemos puesto a las personas en el centro de todo lo que hacemos. Juntos, estamos comprometidos a inspirar a la fuerza laboral y a las empresas de latinoamerica, ayudando a allanar el camino para quienes ponen sus esfuerzos en los productos hechos en China para que cumplan sus expectativas, y sea un paso de progreso en cada compra.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9 shadow-lg rounded-lg overflow-hidden">
                        <iframe class="embed-responsive-item" src="{{ asset('videos/contacto.mp4#t=02') }}" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section about-page py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Título "QUIENES SOMOS" -->
                    <h2 class="title-color text-center mb-5 text-animate animate__fadeInUp" style="font-size: 2.5rem; position: relative; display: inline-block;">
                        <span style="position: relative; z-index: 1; padding: 0 20px; background: linear-gradient(to right, #f8f9fa, #ffffff, #f8f9fa);">¿QUIENES SOMOS?</span>
                        <span style="position: absolute; bottom: 10px; left: 0; right: 0; height: 3px; background: linear-gradient(to right, transparent, #223a66, transparent); z-index: 0;"></span>
                    </h2>

                    <!-- Texto -->
                    <p class="text-animate animate__fadeInUp" style="animation-delay: 0.3s; text-align: center; font-size: 1.1rem; line-height: 1.8; max-width: 800px; margin: 0 auto 40px;">
                        Con nuestras oficinas en Yiwu, el corazón comercial de la provincia de Zhejiang, e integrados por profesionales locales y de Ecuador, República Dominicana y Venezuela, ponemos toda nuestra experiencia al servicio de los empresarios que buscan un aliado serio, responsable y de confianza.
                    </p>

                    <!-- Video -->
                    <div class="embed-responsive embed-responsive-16by9 shadow-lg rounded-lg overflow-hidden text-animate animate__fadeInUp" style="animation-delay: 0.5s;">
                        <video class="embed-responsive-item" controls poster="{{ asset('images/video-poster.jpg') }}">
                            <source src="{{ asset('videos/video-almacen_1A09fzFo.mp4#t=02') }}" type="video/mp4">
                            Tu navegador no soporta el elemento de video.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Configuración para animar los elementos al hacer scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const animation = element.getAttribute('data-animation') || 'animate__fadeInUp';
                
                // Reset animation
                element.style.opacity = '0';
                element.classList.remove('animate__animated', animation);
                
                // Apply animation
                setTimeout(() => {
                    element.style.opacity = '1';
                    element.classList.add('animate__animated', animation);
                }, 50);
            }
        });
    }, {threshold: 0.1});

    // Observar todos los elementos con la clase text-animate
    document.querySelectorAll('.text-animate').forEach(element => {
        observer.observe(element);
    });
});
</script>
@endsection