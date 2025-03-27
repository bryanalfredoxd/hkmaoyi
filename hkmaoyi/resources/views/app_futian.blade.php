@extends('layouts.app')
@section('title', 'Supervise sus compras con FUTIAN')
@section('content')
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="hkmaoyi,importaciones,china,china">
	<meta name="author" content="corpoasia.com">


    <style>
        @font-face {
            font-family: Lato;
            src: url("font/Righteous-Regular.ttf");
            font-weight: 400;
            font-style: cursive;

        }
        .p1 {
            position: absolute;
            top: 1rem;
            z-index: 5;
            opacity: 0;
        }
        .p3 {
            margin-left: 20%;
            opacity: 0;
        }
    </style>

<div class="top">

    <section class="page-title bg-4">
    <div class="overlay2"></div>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="block text-center">
            <span class="text-white">Supervise sus compras con FUTIAN</span>
            <h1 class="text-capitalize mb-5 text-lg">Fue creada para ahorrar tiempo</h1>
            </div>
        </div>
        </div>
    </div>
    </section>

    <section class="section about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                        <div class="about-content pl-4 mt-4 mt-lg-0 text-center">
                            <p class="text-justify">Nuestra APP I-Yiwu para ANDROID, fue creada para ser la herramienta que complementa el trabajo en la visita al mercado FUTIAN pues se tiene que manejar una extensa información de órdenes de compra, fotos y detalles de los productos y a la vez ir calculando los metros cúbicos para no comprar poco o mucho ya que cualquiera de las dos cosas son un problema al momento de llenar su contenedor. <p>
                        </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-content pl-4 mt-4 mt-lg-0">
                        <div class="">
                            <div class="p1" id="p1" style="opacity: 1; left: 50px;">
                                <img src="images/mobile1.png" width="200">
                            </div>
                            <div class="p3" id="p3" style="opacity: 1; left: -120px;">
                                <img src="images/mobile2.png" width="200">
                            </div>
                    
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about-content pl-4 mt-4 mt-lg-0 text-left">
                        <div class="embed-responsive embed-responsive-16by9">
                        <video class="embed-responsive-item" controls>
                            <source src="http://corpofutian.com/video_promo.mp4#t=01" type="video/mp4">
                            Tu navegador no soporta el elemento de video.
                        </video>
    
                        </div>
                        <p class="text-justify mt-4">Con I-YIWU, puede ir teniendo un registro diario de sus visitas a cada proveedor sin estar lleno de tantas tarjetas de presentación y al final de la jornada revisar con cuidado en donde le conviene hacer su compra. Esta APP es gratuita por 20 días y su afiliación anual solo vale 100$, observe el video de presentación y encontrara más detalles sobre la forma en que ella trabaja.</p>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                <div class="about-content pl-4 mt-4 mt-lg-0">
                    <h3 class="mt-5 mb-4">Funciones destacadas</h3>
                    <div class="divider my-4"></div>
                    <ul class="list-unstyled department-service text-justify">
                        <!-- Registra cada proveedor con su tarjeta de la tienda -->
                        <li>
                            <i class="bi bi-person-badge text-primary mr-2"></i>
                            Registra cada proveedor con su tarjeta de la tienda.
                        </li>

                        <!-- Registra cada producto que sea de su interés -->
                        <li>
                            <i class="bi bi-box-seam text-primary mr-2"></i>
                            Registra cada producto que sea de su interés con la información completa para calcular posteriormente su inversión y prioridades de compra.
                        </li>

                        <!-- Es multi usuario y puede tener a la vez dos o tres asistentes trabajando -->
                        <li>
                            <i class="bi bi-people text-primary mr-2"></i>
                            Es multi usuario y puede tener a la vez dos o tres asistentes trabajando con recolectar la información de sus productos.
                        </li>

                        <!-- Sus productos e información van siendo vistos en varios dispositivos en tiempo real -->
                        <li>
                            <i class="bi bi-laptop text-primary mr-2"></i>
                            Sus productos e información van siendo vistos en varios dispositivos en tiempo real.
                        </li>

                        <!-- Puede ver el listado cuando sus productos son recibidos en la bodega -->
                        <li>
                            <i class="bi bi-house-door text-primary mr-2"></i>
                            Puede ver el listado cuando sus productos son recibidos en la bodega.
                        </li>

                        <!-- Puede ver el listado cuando sus productos son embarcados en el contenedor -->
                        <li>
                            <i class="bi bi-truck text-primary mr-2"></i>
                            Puede ver el listado cuando sus productos son embarcados en el contenedor y saber si se han quedado cajas en la bodega.
                        </li>
                    </ul>
                </div>
                </div>
                <div class="col-lg-6 text-center mt-5">
                <div class="mt-3">
                    <div class="feature-icon mb-3">
                    <img src="http://corpofutian.com/logo.PNG" width="180"><br><br>
                    <img src="http://corpofutian.com/qr2.PNG" width="200">
                    </div>
                    <a class="btn btn-round-full btn-success" href="http://corpofutian.com/I-FUTIAN-1.apk" download="http://corpofutian.com/I-FUTIAN-1.apk"><i class="bi bi-google-play"></i> APP Descargar</a><br><br>
                    <a class="btn btn-primary btn-round-full" href="http://corpofutian.com/manual.pdf" download="http://corpofutian.com/manual.pdf"><span><i class="bi bi-filetype-pdf"></i> Manual de usuarios</span></a>
                </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
