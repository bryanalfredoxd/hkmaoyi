@extends('layouts.app')

@section('content')

<style>
    /* Animaciones optimizadas para móviles */
    .text-animate {
        opacity: 0;
        animation: fadeInUp 1s forwards;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(10px); /* Menos movimiento para móviles */
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .delay-1 { animation-delay: 0.2s; }
    .delay-2 { animation-delay: 0.4s; }
    .delay-3 { animation-delay: 0.6s; }
    
    /* Mejoras responsive */
    .title-highlight {
        color: #ce180a;
        text-shadow: 0 1px 2px rgba(0,0,0,0.1);
    }
    
    .check-list li {
        margin-bottom: 12px;
        padding-left: 25px;
        position: relative;
        line-height: 1.5;
    }
    
    .check-list i {
        position: absolute;
        left: 0;
        top: 3px;
        color: #ce180a;
        font-size: 1em;
    }
    
    .content-block {
        margin-bottom: 30px;
    }
    
    /* Optimización para móviles */
    @media (max-width: 767.98px) {
        .page-title h1 {
            font-size: 1.8rem !important;
        }
        
        .about-content h2 {
            font-size: 1.5rem !important;
        }
        
        .about-content p, .check-list li {
            font-size: 0.95rem;
            line-height: 1.6;
        }
        
        .embed-responsive {
            margin-bottom: 15px;
        }
    }
    
    @media (max-width: 575.98px) {
        .check-list {
            padding-left: 15px;
        }
        
        .about-content {
            padding-left: 0 !important;
        }
    }
</style>

<div id="top">

<!-- Hero Section -->
<section class="page-title bg-3">
  <div class="overlay2"></div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="block text-center py-4 py-lg-5">
          <span class="text-white text-animate d-block mb-3">Productos ideales</span>
          <h1 class="text-capitalize text-lg text-animate delay-1">¿Productos?</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Main Content -->
<section class="section about py-4 py-lg-5">
    <div class="container">
        <div class="row">
            <!-- Introducción -->
            <div class="col-12">
                <div class="about-content text-center content-block px-3 px-lg-4">
                    <h2 class="title-color text-animate delay-1 mb-4">¿No está seguro donde comprar lo que necesita?</h2>
                    <h5 class="title-highlight text-animate delay-2 mb-4">
                        En China hay diferentes lugares donde se puede comprar al mayor o al detal con buenos precios<br class="d-none d-lg-block">
                        pero si se trata de comprar al mayor le podemos dar las siguientes recomendaciones.
                    </h5>
                </div>
            </div>
            
            <!-- Recomendaciones e Imagen -->
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="about-content content-block text-animate delay-1 px-3 px-lg-4">
                    <h3 class="mb-3">Recomendaciones</h3>
                    <div class="divider my-3" style="background:#ce180a; height:2px;"></div>
                    <ul class="check-list">
                        <li class="text-animate delay-2">
                            <i class="icofont-check"></i>
                            Asistir a la feria de Cantón en el mes de abril-mayo o en octubre-noviembre para tener la oportunidad de conocer varios fabricantes a gran escala de miles de productos, más información en su página web. 
                            <a class="text-primary" href="https://www.cantonfair.org.cn" target="_blank">www.cantonfair.org.cn</a>
                        </li>
                        <li class="text-animate delay-3">
                            <i class="icofont-check"></i>
                            Asistir a las ferias especializadas que durante todo el año hay en China. 
                            <a class="text-primary" href="{{ route('ferias') }}">www.hkmaoyi.com/ferias</a>
                        </li>
                        <li class="text-animate delay-3">
                            <i class="icofont-check"></i>
                            Páginas web especializadas: 
                            <a class="text-primary" href="https://www.alibaba.com" target="_blank">Alibaba.com</a>, 
                            <a class="text-primary" href="https://www.made-in-china.com" target="_blank">made-in-china.com</a>, 
                            <a class="text-primary" href="https://www.chinagoods.com" target="_blank">chinagoods.com</a>, 
                            <a class="text-primary" href="https://www.yiwugo.com" target="_blank">yiwugo.com.</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6 order-lg-2 order-1 mt-3 mt-lg-0 mb-4 mb-lg-0">
                <div class="about-img text-center">
                    <img src="{{ asset('images/feria2.jpg') }}" alt="Feria comercial en China" class="img-fluid rounded shadow">
                </div>
            </div>
            
            <!-- Descripción -->
            <div class="col-12 mt-4 mt-lg-5">
                <div class="about-content text-center content-block text-animate delay-2 px-3 px-lg-4">
                    <p>
                        Para cada una de estas páginas existe un método de compra similar pero con estrategias de soporte al cliente diferentes y ofrecen su base de datos para localizar productos y proveedores que están en China, Asia, Europa, Latinoamérica entre otros y todo depende de que tan familiar se haga usted con el formato que tiene cada una, puede ver en los bordes laterales de la web y en el encabezado los diferentes filtros para clasificar los productos.
                    </p>
                </div>
            </div>

            <!-- Videos -->
            <div class="col-12 mt-4 mt-lg-5">
                <div class="container px-0 px-lg-3">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="embed-responsive embed-responsive-16by9 rounded shadow">
                                <video class="embed-responsive-item" controls>
                                    <source src="{{ asset('videos/compra1.mp4') }}" type="video/mp4">
                                    Tu navegador no soporta el elemento de video.
                                </video>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="embed-responsive embed-responsive-16by9 rounded shadow">
                                <video class="embed-responsive-item" controls>
                                    <source src="{{ asset('videos/compra2.mp4') }}" type="video/mp4">
                                    Tu navegador no soporta el elemento de video.
                                </video>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="embed-responsive embed-responsive-16by9 rounded shadow">
                                <video class="embed-responsive-item" controls>
                                    <source src="{{ asset('videos/compra3.mp4') }}" type="video/mp4">
                                    Tu navegador no soporta el elemento de video.
                                </video>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="embed-responsive embed-responsive-16by9 rounded shadow">
                                <video class="embed-responsive-item" controls>
                                    <source src="{{ asset('videos/compra4.mp4') }}" type="video/mp4">
                                    Tu navegador no soporta el elemento de video.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Seguridad -->
            <div class="col-12 mt-4 mt-lg-5">
                <div class="about-content text-center content-block text-animate delay-1 px-3 px-lg-4">
                    <h2 class="title-color mb-4">¿Es seguro comprar en estas empresas?</h2>
                    <p class="text-justify">
                        Realmente estas empresas no venden productos, son el portal para los proveedores, sin embargo para el caso de Alibaba.com y Made-In-China.com se ofrecen filtros de selección en los que han hecho una visita o son proveedores auditados para aumentar la confianza, en el caso de Alibaba.com ellos ofrecen el servicio de seguro de compra y calculan el transporte porque cuentan con medios de transporte independientes lo que da una mayor seguridad al comprador.<br><br>
                        En <b class="title-highlight">Hong Kong Maoyi Import and Export Limited</b> le ofrecemos el servicio de visitar los proveedores que usted haya seleccionado y entablado comunicación para hacer la compra y servir de apoyo durante todos los procesos de la negociación, hacemos la factura consolidada uniendo todos los productos de sus proveedores y luego recibimos esos pedidos para hacer un solo envío a su país como carga aérea o marítima.
                        Para el caso de Yiwugo.com y Chinagoods.com con anotar los números de las tiendas nosotros podremos ayudar a visitarlos y hacer los pedidos.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animación optimizada para móviles
    const animateElements = document.querySelectorAll('.text-animate');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.animationPlayState = 'running';
                observer.unobserve(entry.target); // Mejor rendimiento
            }
        });
    }, {threshold: 0.1});

    animateElements.forEach(el => {
        el.style.opacity = 0;
        observer.observe(el);
    });
});
</script>

</div>
@endsection