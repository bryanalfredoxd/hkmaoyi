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
		src: url("{{ asset('font/Righteous-Regular.ttf') }}");
		font-weight: 400;
		font-style: cursive;
	}
</style>

<style>
    /* Sobrescribir el estilo que aplica la línea roja */
    .nav.nav-line .nav-link.active {
        border-bottom: none !important;
    }

    /* Animación de entrada para las pestañas */
    .tab-pane.fade.show {
        animation: fadeIn 0.5s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Estilo para el enlace activo */
    .nav-link.active {
        position: relative;
        color: #223a66 !important;
        font-weight: bold;
    }

    .nav-link.active::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background-color: #ce180a;
        animation: underline 0.3s ease-in-out;
    }

    @keyframes underline {
        from {
            transform: scaleX(0);
        }
        to {
            transform: scaleX(1);
        }
    }

    /* Efecto hover para los enlaces */
    .nav-link {
        transition: color 0.3s ease-in-out, transform 0.3s ease-in-out;
        color: #333;
    }

    .nav-link:hover {
        color: #ce180a !important;
        transform: translateY(-3px);
    }
</style>

<style>
    /* Estilos para la sección de clientes */
    .clients-section {
        background: linear-gradient(rgba(0, 81, 81, 0.97), rgba(0, 81, 81, 0.97));
        padding: 60px 0;
        position: relative;
    }

    .clients-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url("{{ asset('images/pattern.png') }}") repeat;
        opacity: 0.1;
    }

    .section-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .section-header h2 {
        font-size: 2.5rem;
        color: #fff;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .section-header .line-through {
        position: relative;
        display: inline-block;
        color: #e0e0e0;
        font-size: 1.1rem;
        padding: 0 70px;
    }

    .section-header .line-through::before,
    .section-header .line-through::after {
        content: '';
        position: absolute;
        top: 50%;
        width: 50px;
        height: 1px;
        background: rgba(255,255,255,0.3);
    }

    .section-header .line-through::before {
        left: 0;
    }

    .section-header .line-through::after {
        right: 0;
    }

    .client-item {
        background: rgba(255,255,255,0.1);
        border-radius: 8px;
        padding: 20px;
        margin: 10px;
        transition: all 0.3s ease;
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .client-item:hover {
        transform: translateY(-5px);
        background: rgba(255,255,255,0.15);
    }

    .client-item img {
        max-height: 80px;
        filter: brightness(0) invert(1);
        opacity: 0.7;
        transition: all 0.3s ease;
    }

    .client-item:hover img {
        opacity: 1;
    }

    .carousel-footer {
        text-align: center;
        margin-top: 40px;
        color: #fff;
    }

    .carousel-footer p {
        color: #e0e0e0;
        margin-bottom: 20px;
    }

    .btn-explore {
        background: transparent;
        color: #fff;
        border: 2px solid rgba(255,255,255,0.3);
        padding: 10px 25px;
        border-radius: 30px;
        transition: all 0.3s ease;
        font-weight: 500;
        text-decoration: none;
    }

    .btn-explore:hover {
        background: #fff;
        color: #005151;
        border-color: #fff;
        text-decoration: none;
    }

    /* Controles del carrusel */
    .carousel-control-prev,
    .carousel-control-next {
        width: 40px;
        height: 40px;
        background: rgba(255,255,255,0.1);
        border-radius: 50%;
        opacity: 1;
        top: 50%;
        transform: translateY(-50%);
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
        background: rgba(255,255,255,0.2);
    }

    .carousel-control-prev {
        left: -50px;
    }

    .carousel-control-next {
        right: -50px;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        width: 20px;
        height: 20px;
    }
</style>

<div id="top">

	<section class="banner" style="height:400px;">
		<div class="overlay3"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="block">
						<div class="divider mb-3"></div>
						<span class="text-uppercase text-sm letter-spacing text-white">Nuestra principal ventaja es</span>
						<h1 class="text-uppercase mb-3 mt-3" class="texto">Contamos con personal de habla hispana en nuestras oficinas en China.</h1>

						<p class="mb-4 pr-5 text-white"></p>
						<div class="btn-container ">
							<a href="{{ route('conocenos') }}" class="btn btn-main-3 btn-icon btn-round-full">Mas informacion sobre nosotros<i class="bi bi-chevron-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="">
						<img src="{{ asset('images/fond2.png') }}" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="text-white">
		<div id="hpLogoCarouselContainer">
			<div class="wrapper">
				<div id="swiper_hpLogoCarousel" class="genericCarousel" data-module="genericCarousel" data-settings='{&quot;slidesPerView&quot;:6,&quot;spaceBetween&quot;:50,&quot;breakpointsInverse&quot;:true,&quot;breakpoints&quot;:{&quot;599&quot;:{&quot;slidesPerView&quot;:2,&quot;spaceBetween&quot;:20},&quot;799&quot;:{&quot;slidesPerView&quot;:3,&quot;spaceBetween&quot;:30},&quot;999&quot;:{&quot;slidesPerView&quot;:4,&quot;spaceBetween&quot;:40},&quot;1199&quot;:{&quot;slidesPerView&quot;:5}},&quot;effect&quot;:&quot;slide&quot;,&quot;grabCursor&quot;:true,&quot;loop&quot;:false,&quot;lift&quot;:{&quot;enabled&quot;:false,&quot;slotName&quot;:&quot;Homepage Logo Carousel&quot;,&quot;lastCheck&quot;:2000,&quot;transition&quot;:{&quot;name&quot;:&quot;LeftToRightReveal&quot;,&quot;offset&quot;:200,&quot;duration&quot;:700}},&quot;navigation&quot;:{&quot;nextEl&quot;:&quot;#swiper_hpLogoCarousel .swiper-button-next&quot;,&quot;prevEl&quot;:&quot;#swiper_hpLogoCarousel .swiper-button-prev&quot;}}'>
					<div class="carousel_header">
						<h2 class="text-white" style="font-size:30px"><strong>Nuestros Clientes</strong></h2>
						<div class="line-through"><span class="ml-1"> Grandes negocios se hacen contando con buenos aliados. </span></div>
					</div>
					<div class="swiper-container lefttorightreveal">
						<div class="container">
							<div class="row clients-logo">
								<div class="col-lg-2">
									<div class="client-thumb">
									  <img src="{{ asset('images/about/2.png') }}" alt="" class="img-fluid" style="height:90px;filter: opacity(50.4%) invert(0.4%)">
						            </div>
						         </div>
								<div class="col-lg-2">
									<div class="client-thumb">
										<img src="{{ asset('images/about/4.png') }}" alt="" class="img-fluid" style="height:90px;filter: opacity(50.4%) invert(0.4%)">
									</div>
								</div>
								<div class="col-lg-2">
									<div class="client-thumb">
										<img src="{{ asset('images/about/6.png') }}" alt="" class="img-fluid" style="height:70px;filter: opacity(50.4%) invert(0.4%)">
									</div>
								</div>
								<div class="col-lg-2">
									<div class="client-thumb">
										<img src="{{ asset('images/about/10.png') }}" alt="" class="img-fluid" style="height:90px;filter: opacity(50.4%) invert(0.4%)">
									</div>
								</div>
								<div class="col-lg-2">
									<div class="client-thumb">
										<img src="{{ asset('images/about/12.png') }}" alt="" class="img-fluid" style="height:90px;filter: opacity(50.4%) invert(0.4%)">
									</div>
								</div>
								<div class="col-lg-2">
									<div class="client-thumb">
										<img src="{{ asset('images/about/8.png') }}" alt="" class="img-fluid" style="height:70px;filter: opacity(50.4%) invert(0.4%)">
									</div>
								</div>
								<div class="col-lg-2">
									<div class="client-thumb">
										<img src="{{ asset('images/about/9.png') }}" alt="" class="img-fluid" style="height:90px;filter: opacity(50.4%) invert(0.4%)">
									</div>
								</div>
								<div class="col-lg-2">
									<div class="client-thumb">
										<img src="{{ asset('images/about/13.png') }}" alt="" class="img-fluid" style="height:70px;filter: opacity(50.4%) invert(0.4%)">
									</div>
								</div>
								<div class="col-lg-2">
									<div class="client-thumb">
										<img src="{{ asset('images/about/3.png') }}" alt="" class="img-fluid" style="height:70px;filter: opacity(50.4%) invert(0.4%)">
									</div>
								</div>
								<div class="col-lg-2">
									<div class="client-thumb">
										<img src="{{ asset('images/about/7.png') }}" alt="" class="img-fluid" style="height:50px;filter: opacity(50.4%) invert(0.4%)">
									</div>
								</div>
								<div class="col-lg-2">
									<div class="client-thumb">
										<img src="{{ asset('images/about/11.png') }}" alt="" class="img-fluid" style="height:70px;filter: opacity(50.4%) invert(0.4%)">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="carousel_footer">
						<div class="line-through">-</div>
						<p>Nuestras soluciones están diseñadas específicamente para su empresa y todos sus empleados.
							<a class="btn btn-main-4 btn-round-full" href="{{ route('proveedores') }}">Explorar proveedores <i class="bi-chevron-right ml-2"></i></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section about">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-3 col-sm-6">
					<div class="about-img">
						<img src="{{ asset('images/about/img-1.png') }}" alt="" class="img-fluid">
						<img src="{{ asset('images/about/img-2.jpg') }}" alt="" class="img-fluid mt-4">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="about-img mt-4 mt-lg-0">
						<img src="{{ asset('images/about/bg1.jpg') }}" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about-content pl-4 mt-4 mt-lg-0">
						<h2 class="title-color" style="font-size:30px">Visitas en vivo</h2>
						<p class="mt-4 mb-5">En estas visitas se establece un contacto directo con el proveedor y sus productos, para conocer de inmediato los precios y detalles del mismo, así como negociar su precio porque haremos una traducción simultánea al idioma español o inglés.</p>

						<a href="{{ route('envivo') }}" class="btn btn-main-2 btn-round-full btn-icon">Conozca mas detalles del servicio<i class="bi-chevron-right ml-3"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--Servicios-->
	<section class="section doctors" style="padding: 50px 0; background: #f4f9fc;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 text-center">
					<div class="section-title">
						<h2 style="font-size:30px">Servicios</h2>
						<div class="divider mx-auto my-4"></div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="d-flex align-items-left flex-column">
						<div class="nav-scroller d-flex">
							<div class="nav nav-line d-flex align-items-center justify-contents-center">
								<a class="nav-link active" data-toggle="pill" href="#proveedores" role="tab" aria-controls="proveedores" aria-selected="true" style="padding: 0px 0px 20px 0 !important;">Auditoría a proveedores</a>
								<a class="nav-link" data-toggle="pill" href="#compras" role="tab" aria-controls="compras" aria-selected="false" style="padding: 0px 0px 20px 0 !important;">Consolidación de compras</a>
								<a class="nav-link" data-toggle="pill" href="#despachos" role="tab" aria-controls="despachos" aria-selected="false" style="padding: 0px 0px 20px 0 !important;">Logística de despachos</a>
								<a class="nav-link" data-toggle="pill" href="#ferias" role="tab" aria-controls="ferias" aria-selected="false" style="padding: 0px 0px 20px 0 !important;">Ferias y visitas a centros</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="tab-content mt-4">
						<div class="tab-pane fade show active" id="proveedores">
								<div class="row">
									<div class="col-md-8">
									<div class="about-content pl-4 mt-4 mt-lg-0">
										<h4 class="title-color">Siempre es bueno conocer antes de comprar</h4>
										<p class="mt-4 mb-5" style="text-align:justify;">Tenemos la ventaja al estar en China de poder insvestigar a los proveedores tanto documentalmente o en persona haciendoles una visita, previo a que usted haga los primeros pagos.</p>

										<a href="#" class="btn btn-main-2 btn-round-full btn-icon" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Solicite este servicio<i class="bi-chevron-right ml-3"></i></a>
									</div>
									<div class="row mt-4">
										<div class="col-3 col-md-2">
											<div class="about-img mt-4 mt-lg-0">
												<img src="{{ asset('images/proveedor.webp') }}" alt="" class="img-fluid">
											</div>
										</div>
										<div class="col-9 col-md-9">
											<div class="about-content pl-4 mt-4 mt-lg-0">
												<h4 class="title-color">Disponible en toda China</h4>
												<p class="mt-4 mb-5" style="text-align:justify;">Un servicio indespensable para comenzar de forma segura una relacion comercial basada en la confianza y si es necesario podemos hacer contratos de fiel cumplimiento.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="about-img mt-4 mt-lg-0">
										<img src="{{ asset('images/auditoria.jpg') }}" alt="" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="compras">
							<div class="row">
								<div class="col-md-8">
									<div class="about-content pl-4 mt-4 mt-lg-0">
										<h4 class="title-color">Mas proveedores en un solo despacho</h4>
										<p class="mt-4 mb-5" style="text-align:justify;">Compre con sus proveedores regulares o experimente con los nuevos y nosostros le ayudamos a recibir y enviar en un solo contenedor o por pocos metros cubicos tambien esta disponible, consolidar es una de las mejores alternativa para aumentar la variedad y reducir el impacto de los fletes altos.</p>

										<a href="#" class="btn btn-main-2 btn-round-full btn-icon" data-toggle="modal" data-target="#tarifas">tarifas y mas informacion<i class="bi-chevron-right ml-3"></i></a>
									</div>
								</div>
								<div class="col-md-4">
									<div class="img">
										<img src="{{ asset('images/container-loading.png') }}" alt="" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="despachos">
							<div class="row">
								<div class="col-md-8">
									<div class="about-content pl-4 mt-4 mt-lg-0">
										<h4 class="title-color">Solo necesita transporte desde China?</h4>
										<p class="mt-4 mb-5" style="text-align:justify;">Nuestros servicio de logistica le puede ofrecer las mejores tarifas de contenedores para latinoamerica saliendo de cualquier puerto de China, contenedores para mercancia convencional, transporte de materiales peligrosos, autos, camiones, maquinaria, contenedores destapados, entre otros.</p>

										<a href="#" class="btn btn-main-2 btn-round-full btn-icon" data-toggle="modal" data-target="#transporte">Mas informacion y precios<i class="bi-chevron-right ml-3"></i></a>
									</div>
								</div>
								<div class="col-md-4">
									<div class="img">
										<img src="{{ asset('images/envio-de-carga-aerea-maritima.png') }}" alt="" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="ferias">
							<div class="row">
								<div class="col-md-8">
									<div class="about-content pl-4 mt-4 mt-lg-0">
										<h4 class="title-color">La mejores ferias y mercados mayoristas</h4>
										<p class="mt-4 mb-5" style="text-align:justify;">En Abril y octubre son las ferias mas completas de China pero durante todos los meses del año hay ferias especializadas por sector en muchas provincias donde le podemos asistir para que sea gratis su hospedajes, traslados y hacer entrevistas muy puntuales con los fabricantes.</p>

										<a href="#" class="btn btn-main-2 btn-round-full btn-icon" data-toggle="modal" data-target="#visitas">Solicite este servicio<i class="bi-chevron-right ml-3"></i></a>
									</div>
									<div class="row mt-4">
										<div class="col-3 col-md-2">
											<div class="about-img mt-4 mt-lg-0">
												<img src="{{ asset('images/yiwu3.webp') }}" alt="" class="img-fluid">
											</div>
										</div>
										<div class="col-9 col-md-9">
											<div class="about-content pl-4 mt-4 mt-lg-0">
												<a href="{{ route('ferias') }}">
													<h4 class="title-color">Disponible en toda China todo el año<i class="bi-chevron-right ml-3"></i></h4>
												</a>
												<p class="mt-4 mb-5" style="text-align:justify;">Los mercados mayoristas son un buen lugar para visitar de marzo a noviembre por su variedad, buenos precios y por la facilidad de comparar productos y alternativas de proveedores que estan en un mismo lugar con stock.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="about-img mt-4 mt-lg-0">
										<img src="{{ asset('images/ferias.jpg') }}" alt="" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<section class="section cta-page">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="cta-content">
						<div class="divider mb-4"></div>
						<span class="text-uppercase text-sm letter-spacing text-white">Donde comprar pocas cantidades a precios al mayor?</span>
						<h2 class="mb-5 text-lg text-white" style="font-size:30px">Conoce unos de los mercados mayoristas mas grandes de toda China <span style="color:#E44539;">FUTIAN</span></h2>
						<a href="{{ route('mercado_futian') }}" class="btn btn-main-3 btn-round-full">Mas informacion<i class="bi-chevron-right  ml-2"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="page-title" style="padding: 0px 0px 0px 0px;background:#fbb942;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 m-4">
					<div class="block text-center">
						<b style="font-size:20px;color: #223a66;">¿ No está seguro donde comprar lo que necesitas ? </b>
						<a href="{{ route('producto_ideal') }}" class="btn btn-round-full btn-main-2 btn-icon">Encuentra una solución<i class="bi-chevron-right ml-3"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section about">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="about-content pl-4 mt-4 mt-lg-0">
						<h2 class="title-color" style="font-size:30px">Supervise sus compras.</h2><br>
						<h5 style="color:#e96a61;">I-YIWU fue creada para ahorrar tiempo en todos los procesos.</h5>
						<p class="mt-4 mb-5">Nuestra APP I-YIWU esta disponible para todos que vienen de compras a la ciudad de Yiwu, y requieren de llevar un control completo o para los empresarios que aun sin venir quieren tener las fotos, los precios y detalles de todos sus productos en un solo lugar y decidir la cantidad a comprar y de inmediato obtener todos los calculos listos.</p>

						<a href="{{ route('app_futian') }}" class="btn btn-main-2 btn-round-full btn-icon">Conozca mas sobre esta APP<i class="bi-chevron-right ml-3"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12">
					<div class="about-img mt-4 mt-lg-0">
						<img src="{{ asset('images/futian.jpg') }}" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!--modales -->
	<div style="margin-top: auto" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content" style="border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);">
				<!-- Encabezado de la modal -->
				<div class="modal-header d-flex align-items-center justify-content-between" style="background-color: #223a66; border-top-left-radius: 10px; border-top-right-radius: 10px;">
					<h5 class="modal-title text-center w-100 mb-0" style="color: white; font-size: 1.5rem;">Solicitar cotización del servicio de auditoría</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
	
				<!-- Cuerpo de la modal -->
				<div class="modal-body">
					<form class="appoinment-form" method="POST" action="http://corpoasia.synology.me/email/ma.php">
						<div class="row">
							<!-- Columna izquierda -->
							<div class="col-6">
								<div class="form-group">
									<label for="recipient-name" class="col-form-label" style="font-weight: bold;">
										<i class="bi bi-person me-2"></i> Nombre del solicitante
									</label>
									<input type="text" class="form-control" id="recipient-name" name="nombre" required style="border-radius: 5px; border: 1px solid #ddd; padding: 10px;">
								</div>
								<div class="form-group">
									<label for="recipient-name" class="col-form-label" style="font-weight: bold;">
										<i class="bi bi-envelope me-2"></i> Email
									</label>
									<input type="text" class="form-control" id="recipient-name" name="email" required style="border-radius: 5px; border: 1px solid #ddd; padding: 10px;">
								</div>
								<div style="margin-top: 30px;" class="form-group">
									<label style="font-weight: bold;">
										<i class="bi bi-file-earmark-text me-2"></i> Tipo de auditoría
									</label>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Documental">
										<label class="form-check-label" for="flexRadioDefault1">
											Documental
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Visita a la fabrica" checked>
										<label class="form-check-label" for="flexRadioDefault2">
											Visita a la fábrica
										</label>
									</div>
								</div>
							</div>

							<!-- Columna derecha -->
							<div class="col-6">
								<div class="form-group">
									<label for="recipient-name" class="col-form-label" style="font-weight: bold;">
										<i class="bi bi-globe me-2"></i> País
									</label>
									<select class="form-control" name="pais" required style="border-radius: 5px; border: 1px solid #ddd; padding: 10px;">
										<option value="Venezuela">Venezuela</option>
										<option value="Usa">Usa</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Colombia">Colombia</option>
										<option value="Republica dominicana">República Dominicana</option>
										<option value="Panama">Panamá</option>
										<option value="otros">Otros</option>
									</select>
								</div>
								<div class="form-group">
									<label for="recipient-name" class="col-form-label" style="font-weight: bold;">
										<i class="bi bi-geo-alt me-2"></i> Ciudad en China
									</label>
									<input type="text" class="form-control" id="recipient-name" name="ciudad" required style="border-radius: 5px; border: 1px solid #ddd; padding: 10px;">
								</div>
								<div class="form-group">
									<label for="recipient-name" class="col-form-label" style="font-weight: bold;">
										<i class="bi bi-geo-alt-fill me-2"></i> Provincia en China
									</label>
									<input type="text" class="form-control" id="recipient-name" name="provincia" required style="border-radius: 5px; border: 1px solid #ddd; padding: 10px;">
								</div>
							</div>
						</div>

						<!-- Pie de la modal -->
						<div class="modal-footer" style="display: flex; justify-content: center; border-top: none;">
							<button type="submit" name="auditoria" class="btn btn-round-full btn-primary" style="background-color: #223a66; border: none; padding: 10px 30px; font-size: 1rem; border-radius: 25px;">
								ENVIAR
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	<div style="margin-top: auto;" class="modal fade" id="visitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content" style="border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);">
				<!-- Encabezado de la modal -->
				<div class="modal-header d-flex align-items-center justify-content-between" style="background-color: #223a66; border-top-left-radius: 10px; border-top-right-radius: 10px;">
					<h5 class="modal-title text-center w-100 mb-0" style="color: white; font-size: 1.5rem;">Solicitar el servicio de visita</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<!-- Cuerpo de la modal -->
				<div class="modal-body">
					<form class="appoinment-form" method="POST" action="http://corpoasia.synology.me/email/ma.php">
						<div class="row">
							<!-- Columna izquierda -->
							<div class="col-6">
								<div class="form-group">
									<label for="recipient-name" class="col-form-label" style="font-weight: bold;">
										<i class="bi bi-person me-2"></i> Nombre del solicitante
									</label>
									<input type="text" class="form-control" id="recipient-name" name="nombre" required style="border-radius: 5px; border: 1px solid #ddd; padding: 10px;">
								</div>
								<div class="form-group">
									<label for="recipient-name" class="col-form-label" style="font-weight: bold;">
										<i class="bi bi-envelope me-2"></i> Email
									</label>
									<input type="text" class="form-control" id="recipient-name" name="email" required style="border-radius: 5px; border: 1px solid #ddd; padding: 10px;">
								</div>
								<div class="form-group">
									<label for="recipient-name" class="col-form-label" style="font-weight: bold;">
										<i class="bi bi-globe me-2"></i> País
									</label>
									<select class="form-control" name="pais" required style="border-radius: 5px; border: 1px solid #ddd; padding: 10px;">
										<option value="Venezuela">Venezuela</option>
										<option value="Usa">Usa</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Colombia">Colombia</option>
										<option value="Republica dominicana">República Dominicana</option>
										<option value="Panama">Panamá</option>
									</select>
								</div>
							</div>

							<!-- Columna derecha -->
							<div class="col-6">
								<div class="form-group">
									<label for="recipient-name" class="col-form-label" style="font-weight: bold;">
										<i class="bi bi-geo-alt me-2"></i> Ciudad en China
									</label>
									<input type="text" class="form-control" id="recipient-name" name="ciudad" required style="border-radius: 5px; border: 1px solid #ddd; padding: 10px;">
								</div>
								<div class="form-group">
									<label for="recipient-name" class="col-form-label" style="font-weight: bold;">
										<i class="bi bi-geo-alt-fill me-2"></i> Provincia en China
									</label>
									<input type="text" class="form-control" id="recipient-name" name="provincia" required style="border-radius: 5px; border: 1px solid #ddd; padding: 10px;">
								</div>
								<div class="form-group">
									<label for="recipient-name" class="col-form-label" style="font-weight: bold;">
										<i class="bi bi-chat-left-text me-2"></i> Mensaje
									</label>
									<textarea class="form-control" id="recipient-name" name="mensaje" rows="4" required style="border-radius: 5px; border: 1px solid #ddd; padding: 10px;"></textarea>
								</div>
							</div>
						</div>

						<!-- Pie de la modal -->
						<div class="modal-footer" style="display: flex; justify-content: center; border-top: none;">
							<button type="submit" class="btn btn-round-full btn-primary" name="visita" style="background-color: #223a66; border: none; padding: 10px 30px; font-size: 1rem; border-radius: 25px;">
								ENVIAR
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	<!--Modal Tarifas-->
	<div  class="modal fade" id="tarifas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content" style="border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);">
				<!-- Encabezado de la modal -->
				<div class="modal-header d-flex align-items-center justify-content-between" style="background-color: #223a66; border-top-left-radius: 10px; border-top-right-radius: 10px;">
					<h5 class="modal-title text-center w-100 mb-0" style="color: white; font-size: 1.5rem;">Tarifas</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<!-- Cuerpo de la modal -->
				<div class="modal-body">
					<div class="row">
						<!-- Columna izquierda (Texto) -->
						<div class="col-lg-8">
							<div class="about-content pl-4 mt-4 mt-lg-0">
								<h3 class="mt-5 mb-4 title-color" style="color: #005151;">Precios hasta fin de enero 2022</h3>
								<div class="divider my-4"></div>
								<ul class="list-unstyled department-service">
									<li class="mb-3"><i class="bi bi-check-lg me-2" style="color: #005151;"></i>295 USD / metros cúbico hasta Guayaquil.</li>
									<li class="mb-3"><i class="bi bi-check-lg me-2" style="color: #005151;"></i>310 USD / metro cúbico hasta Caucedo.</li>
									<li class="mb-3"><i class="bi bi-check-lg me-2" style="color: #005151;"></i>610 USD / metro cúbico puerta a puerta Venezuela.</li>
									<li class="mb-3"><i class="bi bi-check-lg me-2" style="color: #005151;"></i>1950 USD por el servicio de consolidación por contenedor de 40Q.</li>
									<li class="mb-3"><i class="bi bi-exclamation-triangle me-2" style="color: #dc3545;"></i><b class="text-danger">* Nota:</b> El precio del flete por contenedor se actualiza cada semana según el puerto final.</li>
								</ul>
							</div>
						</div>

						<!-- Columna derecha (Imagen) -->
						<div class="col-lg-4">
							<div class="about-img mt-4 mt-lg-0">
								<img src="{{ asset('images/puerto.webp') }}" alt="" class="img-fluid" style="border-radius: 10px;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Solicitar cotización del servicio de transporte-->
	<div style="margin-top: auto;" class="modal fade" id="transporte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content" style="border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);">
				<!-- Encabezado de la modal -->
				<div class="modal-header d-flex align-items-center justify-content-between" style="background-color: #223a66; border-top-left-radius: 10px; border-top-right-radius: 10px;">
					<h5 class="modal-title text-center w-100 mb-0" style="color: white; font-size: 1.5rem;">Solicitar cotización del servicio de transporte</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<!-- Cuerpo de la modal -->
				<div class="modal-body">
					<form class="appoinment-form" method="POST" action="http://corpoasia.synology.me/email/ma.php">
						<div class="row">
							<!-- Columna izquierda -->
							<div class="col-6">
								<div class="form-group">
									<label for="recipient-name" class="col-form-label" style="font-weight: bold;">
										<i class="bi bi-person me-2"></i> Nombre del solicitante
									</label>
									<input type="text" class="form-control" id="recipient-name" name="nombre" required style="border-radius: 5px; border: 1px solid #ddd; padding: 10px;">
								</div>
								<div class="form-group">
									<label for="recipient-name" class="col-form-label" style="font-weight: bold;">
										<i class="bi bi-envelope me-2"></i> Email
									</label>
									<input type="text" class="form-control" id="recipient-name" name="email" required style="border-radius: 5px; border: 1px solid #ddd; padding: 10px;">
								</div>
								<div class="form-group">
									<label for="recipient-name" class="col-form-label" style="font-weight: bold;">
										<i class="bi bi-geo-alt me-2"></i> Puertos de China
									</label>
									<select class="form-control" id="puerto" name="puerto" required style="border-radius: 5px; border: 1px solid #ddd; padding: 10px;">
										<option>Puerto de Shanghai</option>
										<option>Puerto de Shenzhen</option>
										<option>Puerto de Ningbo-Zhoushan</option>
										<option>Puerto de Guangzhou</option>
										<option>Puerto de Hong Kong</option>
										<option>Puerto de Qingdao</option>
										<option>Puerto de Dalian</option>
										<option>Puerto de Tianjin</option>
									</select>
								</div>
							</div>

							<!-- Columna derecha -->
							<div class="col-6">
								<div class="form-group">
									<label for="recipient-name" class="col-form-label" style="font-weight: bold;">
										<i class="bi bi-box me-2"></i> Tipo de contenedores
									</label>
									<select class="form-control" name="tipo" required style="border-radius: 5px; border: 1px solid #ddd; padding: 10px;">
										<option>20 GP</option>
										<option>40 GP</option>
										<option>40 HQ</option>
										<option>Otros</option>
									</select>
								</div>
								<div class="form-group">
									<label for="recipient-name" class="col-form-label" style="font-weight: bold;">
										<i class="bi bi-geo-alt-fill me-2"></i> Puerto destino
									</label>
									<input type="text" class="form-control" id="recipient-name" name="destino" required style="border-radius: 5px; border: 1px solid #ddd; padding: 10px;">
								</div>
							</div>
						</div>

						<!-- Pie de la modal -->
						<div class="modal-footer" style="display: flex; justify-content: center; border-top: none;">
							<button type="submit" class="btn btn-round-full btn-primary" name="transporte" style="background-color: #223a66; border: none; padding: 10px 30px; font-size: 1rem; border-radius: 25px;">
								ENVIAR
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
