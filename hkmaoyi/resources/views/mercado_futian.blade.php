@extends('layouts.app')

@section('content')

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
    .title-highlight {
        color: #ce180a;
        text-shadow: 0 1px 2px rgba(0,0,0,0.1);
    }
    
    .content-block {
        margin-bottom: 40px;
    }
    
    .market-description {
        line-height: 1.8;
        font-size: 1.1rem;
    }
    
    .video-container {
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        border-radius: 10px;
        overflow: hidden;
    }
</style>

<div id="top">
    <section class="page-title bg-4">
        <div class="overlay2"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white text-animate">El mercado de YIWU</span>
                        <h1 class="text-capitalize mb-5 text-lg text-animate delay-1" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.3);">Mercado mayorista FUTIAN</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-content pl-4 mt-4 mt-lg-0 text-center content-block">
                        <p class="market-description text-justify text-animate delay-1">
                            El mercado de Yiwu fue creado en 1982 con una extensión de 6.400.000 m², 75.000 tiendas mayoristas organizadas en 26 categorías y más de 2 millones de productos que se exportan a todo el mundo incluyendo las cadenas de supermercados WALMART y tiendas online como Amazon, Ebay, Alibaba y entre otras.
                        </p>
                        
                        <h5 class="title-highlight text-animate delay-2">
                            El Procedimiento de cómo hacer compras en el mercado FUTIAN desde casa<br>
                            Acceda a su portal de ventas <a href="https://www.yiwugo.com" class="text-primary">www.yiwugo.com</a>
                        </h5>
                        
                        <h2 class="title-color text-justify text-animate delay-2" style="font-size:1.5rem;">
                            No es necesario estar registrado como miembro de Yiwugo para acceder a su lista de productos y ver las tiendas con sus fotos en 3D.
                        </h2>
                        
                        <img src="images/bosquejo.jpeg" width="60%" class="img-fluid my-4 text-animate delay-3">
                        
                        <h5 class="title-highlight text-animate delay-3">
                            Siga los pasos necesarios de acuerdo a cada plataforma para hacer sus pedidos y nosotros nos<br>
                            encargamos de la logística para comprarlos, recibirlos y despacharlos a su país.
                        </h5>
                    </div>
                </div>
                
                <div class="col-lg-12">
                    <div class="container m-3">
                        <div class="row">
                            <div class="col-lg-6 p-2 text-animate delay-2">
                                <div class="video-container">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <video class="embed-responsive-item" controls poster="{{ asset('images/video-poster.jpg') }}">
                                            <source src="videos/compra3.mp4" type="video/mp4">
                                            Tu navegador no soporta el elemento de video.
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 p-2 text-animate delay-3">
                                <div class="video-container">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <video class="embed-responsive-item" controls poster="{{ asset('images/video-poster.jpg') }}">
                                            <source src="videos/compra4.mp4" type="video/mp4">
                                            Tu navegador no soporta el elemento de video.
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-12">
                    <div class="about-content pl-4 mt-4 mt-lg-0 text-center content-block">
                        <p class="market-description text-justify text-animate delay-1">
                            En muchos proveedores que poseen stock es posible comprar desde 3 cajas por modelo pero si requiere hacer una orden o producir con modificaciones particulares la cantidad varía de 5.000 – 10.000 en adelante.
                        </p>
                        
                        <p class="market-description text-justify text-animate delay-2">
                            Una vez que sepa en donde están sus productos es hora de hacer una cotización y nosotros le ayudaremos en ese proceso, pues visitaremos a cada proveedor para tomar fotos y preguntar los precios o hacer una video llamada con usted en línea para hacer más rápido y precisa una compra.
                        </p>
                        
                        <p class="market-description text-justify text-animate delay-3">
                            Luego de tener los precios, cantidades y detalles de los productos es hora de hacer la orden de compra, nosotros le hacemos una factura consolidada que le haremos llegar para hacer su transferencia, una vez recibida en nuestra cuenta bancaria iremos a los proveedores seleccionados para hacer la compra y despacho a su país. 
                        </p>
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