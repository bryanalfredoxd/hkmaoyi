@extends('layouts.app')

@section('content')
<style>
	@font-face {
		font-family: Lato;
		src: url("{{ asset('font/Righteous-Regular.ttf') }}");
		font-weight: 400;
		font-style: cursive;
	}
</style>

<div id="top">

    <section class="page-title bg-1">
    <div class="overlay2"></div>
    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <div class="block text-center">
            <span class="text-white">Conoce un poco de nosotros</span>
            <h1 class="text-capitalize mb-5 text-lg">HONG KONG MAOYI</h1>
            <p style="text-align: justify;">Sobre la base de 14 a&ntilde;os de experiencia, siempre hemos puesto a las personas en el centro de todo lo que hacemos. Juntos, estamos comprometidos a inspirar a la fuerza laboral y a las empresas de latinoamerica, ayudando a allanar el camino para quienes ponen sus esfuerzos en los productos hechos en China para que cumplan sus expectativas, y sea un paso de progreso en cada compra. </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="{{ asset('videos/contacto.mp4#t=02') }}" allowfullscreen></iframe>
            </div>
        </div>
        </div>
    </div>
    </section>

    <section class="section about-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Título "QUIENES SOMOS" -->
                    <h2 style="text-align: center;" class="title-color">¿QUIENES SOMOS?</h2>

                    <!-- Texto -->
                    <p>Con nuestras oficinas en Yiwu, el corazón comercial de la provincia de Zhejiang, e integrados por profesionales locales y de Ecuador, República Dominicana y Venezuela, ponemos toda nuestra experiencia al servicio de los empresarios que buscan un aliado serio, responsable y de confianza.</p>

                    <!-- Video -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <video class="embed-responsive-item" controls>
                            <source src="{{ asset('videos/video-almacen_1A09fzFo.mp4#t=02') }}" type="video/mp4">
                            Tu navegador no soporta el elemento de video.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

