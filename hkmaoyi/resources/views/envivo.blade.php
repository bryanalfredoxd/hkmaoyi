@extends('layouts.app')
@section('title', 'Video conferencias en vivo con tus proveedores')
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
    .title-highlight {
        color: #ce180a;
        text-shadow: 0 1px 2px rgba(0,0,0,0.1);
    }
    
    .check-list li {
        margin-bottom: 15px;
        padding-left: 30px;
        position: relative;
        line-height: 1.6;
    }
    
    .check-list i {
        position: absolute;
        left: 0;
        top: 5px;
        color: #ce180a;
        font-size: 1.2em;
    }
    
    .contact-icon {
        font-size: 2rem;
        color: #223a66;
        margin-bottom: 15px;
    }
    
    .contact-block {
        transition: all 0.3s ease;
        padding: 20px;
        border-radius: 10px;
        background: #f8f9fa;
        height: 100%;
    }
    
    .contact-block:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
</style>

<div class="top">
    <section class="page-title bg-3">
        <div class="overlay2"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white text-animate">Video conferencias en vivo con tus proveedores</span>
                        <h1 class="text-capitalize mb-5 text-lg text-animate delay-1" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.3);">Ferias, centros mayoristas, fabricas</h1>
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
                        <h2 class="title-color" style="font-size:2rem;">Aplicaciones (Skype, Zoom, Wechat, Whatsapp y Telegram)</h2>
                        <h5 class="title-highlight delay-2">Tu decides cual aplicación usar para la video llamada</h5>
                        <img src="images/gratis.webp" width="40%" class="img-fluid delay-2"><br>
                        <small class="h5 delay-3">Agrega el numero de telefono según la aplicación a usar, y podemos coordinar la prueba gratis</small>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="about-content pl-4 mt-4 mt-lg-0 text-animate delay-1">
                        <h3 class="mt-5 mb-4">Procedimientos</h3>
                        <div class="divider my-4" style="background:#ce180a; height:2px;"></div>
                        <ul class="check-list">
                            <li class="delay-2"><i class="icofont-check"></i>Según tu aplicación agrega nuestro número de contacto</li>
                            <li class="delay-2"><i class="icofont-check"></i>Planifica la hora más adecuada siguiendo el horario en CHINA</li>
                            <li class="delay-3"><i class="icofont-check"></i>Elabora una lista de productos por categoría</li>
                            <li class="delay-3"><i class="icofont-check"></i>Toma nota y fotos durante la video llamada para hacer los pedidos</li>
                            <li class="delay-3"><br><b class="text-danger">* Nota:</b> El costo por hora es de 15USD (Se reintegra si hace una compra)<br><br>Formas de pago disponible: ZELLE y Wester Union<br>Cualquier duda e inquietud comuníquese con nosotros<br>Email: asia@hkmaoyi.com</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="container m-3">
                        <div class="row">
                            <div class="col-lg-6 p-2 text-animate delay-2">
                                <div class="contact-block">
                                    <i class="icofont-whatsapp contact-icon"></i>
                                    <h5>Whatsapp</h5>
                                    +86 15088285809
                                </div>
                            </div>
                            <div class="col-lg-6 p-2 text-animate delay-2">
                                <div class="contact-block">
                                    <i class="icofont-wechat contact-icon"></i>
                                    <h5>Wechat</h5>
                                    +86 15088285809
                                </div>
                            </div>
                            <div class="col-lg-6 p-2 text-animate delay-3">
                                <div class="contact-block">
                                    <i class="icofont-telegram contact-icon"></i>
                                    <h5>Telegram</h5>
                                    +852 95523077
                                </div>
                            </div>
                            <div class="col-lg-6 p-2 text-animate delay-3">
                                <div class="contact-block">
                                    <i class="icofont-skype contact-icon"></i>
                                    <h5>Skype</h5>
                                    @hkmaoyiasia
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section testimonial" style="border-radius: 5px;box-shadow: 0px 0px 30px 0px rgba(0, 42, 106, 0.1);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 text-center text-animate delay-1">
                    <div class="mt-3">
                        <div class="feature-icon mb-3">
                            <i class="icofont-support text-lg" style="font-size:3rem; color:#ce180a;"></i>
                        </div>
                        <span class="h3">Contáctanos al:</span>
                        <h2 class="text-color mt-3">+86 15088285809</h2>
                        <h4 class="delay-2">+593 99515 2106</h4>
                        <h4 class="delay-2">+58 41296 14615</h4>
                        <h4 class="delay-3">+1 849 3532851</h4>
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