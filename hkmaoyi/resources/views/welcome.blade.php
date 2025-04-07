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

<div id="top">

<style>
	/* Oculta la imagen en dispositivos menores a 992px (lg breakpoint de Bootstrap) */
@media (max-width: 991.98px) {
    .banner .img-container {
        display: none !important;
    }
    
    /* Opcional: Ajusta la altura del banner en móviles */
    .banner {
        height: auto !important;
        padding: 60px 0;
    }
}
</style>

	{{-- Nuestra Pincipal Ventaja --}}
	<section style="margin-top: 165px" class="banner position-relative overflow-hidden" style="height:400px;">
		<div class="overlay3 position-absolute w-100 h-100"></div>
		<div class="container h-100">
			<div class="row align-items-center h-100">
				<div class="col-lg-6 order-lg-1 order-2 animate__animated animate__fadeInLeft animate__delay-1s">
					<div class="block py-4">
						<div class="divider mb-3"></div>
						<span class="text-uppercase text-sm letter-spacing text-white d-inline-block animate__animated animate__fadeInUp">Nuestra principal ventaja es</span>
						<h1 class="text-uppercase mb-3 mt-3 texto animate__animated animate__fadeInUp animate__fast">Contamos con personal de habla hispana en nuestras oficinas en China.</h1>
						
						<p class="mb-4 pr-lg-5 text-white animate__animated animate__fadeInUp animate__fast"></p>
						<div class="btn-container animate__animated animate__fadeInUp animate__delay-1s text-center text-md-left">
							<a href="{{ route('conocenos') }}" class="btn btn-main-3 btn-icon btn-round-full hover-effect d-inline-block">
								Más información sobre nosotros <i class="bi bi-chevron-right ml-2"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 order-lg-2 order-1 animate__animated animate__fadeInRight animate__delay-1s">
					<div class="img-container position-relative h-100">
						<img src="{{ asset('images/fond2.png') }}" alt="Oficinas en China" class="img-fluid rounded-lg shadow-sm floating-animation" style="max-height: 350px;">
					</div>
				</div>
			</div>
		</div>
	</section>

	{{-- Nuestros Clientes --}}
	<section class="text-white" id="clientes-section">
		<div class="position-absolute w-100 h-100 bg-pattern-overlay"></div>
		<div id="hpLogoCarouselContainer" class="position-relative">
			<div class="wrapper">
				<div id="swiper_hpLogoCarousel" class="genericCarousel">
					<!-- Encabezado del Carrusel -->
					<div class="carousel_header text-center mb-2 scroll-animate" data-animation="animate__fadeInDown">
						<h2 class="text-white display-5 font-weight-bold mb-3">Nuestros Clientes</h2>
						<div class="d-none d-md-block line-through mx-auto">
							<span class="text-muted font-italic">Grandes negocios se hacen contando con buenos aliados.</span>
						</div>
					</div>
					
					<!-- Contenido del Carrusel (oculto en móviles) -->
					<div class="swiper-container lefttorightreveal d-none d-md-block">
						<div class="container px-0">
							<div class="row clients-logo swiper-wrapper">
								@foreach(['2', '4', '6', '8', '9', '10', '11', '12', '13', '3', '7'] as $img)
								<div class="col-lg-2 swiper-slide scroll-animate" data-animation="animate__zoomIn" data-delay="{{ $loop->index * 100 + 100 }}">
									<div class="client-thumb hover-transform">
										<img src="{{ asset("images/about/$img.png") }}" alt="Logo cliente {{ $img }}" class="img-fluid client-logo">
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
					
					<!-- Pie del Carrusel -->
					<div class="carousel_footer text-center mt-3 mt-md-5 scroll-animate" data-animation="animate__fadeInUp">
						<div class="line-through mx-auto mb-4">-</div>
						<p class="lead mb-4">Nuestras soluciones están diseñadas específicamente para su empresa y todos sus empleados.</p>
						<a class="btn btn-main-4 btn-round-full btn-lg hover-effect" href="{{ route('proveedores') }}">
							Explorar proveedores <i class="bi bi-chevron-right ml-2"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	{{-- Visitas en Vivo --}}
	<section class="section about py-5 position-relative overflow-hidden" id="visitas-section">
		<div class="container">
			<div class="row align-items-center">
				<!-- Columna de imágenes izquierda -->
				<div class="col-lg-3 col-sm-6 d-none d-md-block">
					<div class="about-img">
						<img src="{{ asset('images/about/img-1.png') }}" alt="Visita en vivo a proveedor" 
							 class="img-fluid rounded shadow scroll-animate" 
							 data-animation="animate__fadeInLeft" data-delay="100">
						<img src="{{ asset('images/about/img-2.jpg') }}" alt="Reunión con proveedor" 
							 class="img-fluid rounded shadow mt-4 scroll-animate" 
							 data-animation="animate__fadeInLeft" data-delay="300">
					</div>
				</div>
				
				<!-- Columna de imagen central -->
				<div class="col-lg-3 col-sm-6 d-none d-md-block">
					<div class="about-img mt-4 mt-lg-0">
						<img src="{{ asset('images/about/bg1.jpg') }}" alt="Fábrica china" 
							 class="img-fluid rounded-lg shadow-lg scroll-animate" 
							 data-animation="animate__fadeInUp" data-delay="200">
					</div>
				</div>
				
				<!-- Columna de contenido -->
				<div class="col-lg-6">
					<div class="about-content pl-lg-4 mt-4 mt-lg-0">
						<h2 class="title-color display-5 font-weight-bold scroll-animate" 
							data-animation="animate__fadeInRight" data-delay="100">
							Visitas en vivo
						</h2>
						
						<p class="mt-4 mb-5 lead scroll-animate" 
						   data-animation="animate__fadeInRight" data-delay="200">
							En estas visitas se establece un contacto directo con el proveedor y sus productos, 
							para conocer de inmediato los precios y detalles del mismo, así como negociar su precio 
							porque haremos una traducción simultánea al idioma español o inglés.
						</p>
	
						<div class="scroll-animate text-center text-md-left" data-animation="animate__fadeInUp" data-delay="300">
							<a href="{{ route('envivo') }}" 
							   class="btn btn-main-2 btn-round-full btn-icon hover-effect d-inline-block">
								Conozca más detalles del servicio <i class="bi bi-chevron-right ml-3"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--Servicios-->
	<section class="section doctors py-5 position-relative overflow-hidden" id="servicios-section" style="background: #f4f9fc;">
		<div class="container">
			<!-- Encabezado -->
			<div class="row justify-content-center scroll-animate" data-animation="animate__fadeInDown">
				<div class="col-lg-7 text-center">
					<div class="section-title">
						<h2 class="display-5 font-weight-bold">Servicios</h2>
						<div class="divider mx-auto my-4 bg-primary"></div>
					</div>
				</div>
			</div>
	
			<!-- Pestañas de navegación -->
			<div class="row justify-content-center scroll-animate" data-animation="animate__fadeIn">
				<div class="col-12">
					<div class="d-flex align-items-left flex-column">
						<div class="nav-scroller d-flex">
							<div class="nav nav-line d-flex align-items-center justify-content-center flex-wrap text-center text-md-left">
								<a class="nav-link active hover-effect" data-toggle="pill" href="#proveedores" role="tab" aria-controls="proveedores" aria-selected="true">
									Auditoría a proveedores
								</a>
								<a class="nav-link hover-effect" data-toggle="pill" href="#compras" role="tab" aria-controls="compras" aria-selected="false">
									Consolidación de compras
								</a>
								<a class="nav-link hover-effect" data-toggle="pill" href="#despachos" role="tab" aria-controls="despachos" aria-selected="false">
									Logística de despachos
								</a>
								<a class="nav-link hover-effect" data-toggle="pill" href="#ferias" role="tab" aria-controls="ferias" aria-selected="false">
									Ferias y visitas a centros
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
	
			<!-- Contenido de las pestañas -->
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="tab-content mt-4">
						<!-- Pestaña 1: Auditoría a proveedores -->
						<div class="tab-pane fade show active" id="proveedores">
							<div class="row align-items-center scroll-animate" data-animation="animate__fadeInLeft">
								<div class="col-md-8">
									<div class="about-content pl-lg-4 mt-4 mt-lg-0 text-center text-md-left">
										<h4 class="title-color font-weight-bold">Siempre es bueno conocer antes de comprar</h4>
										<p class="mt-4 mb-5 text-justify">
											Tenemos la ventaja al estar en China de poder investigar a los proveedores tanto documentalmente o en persona haciéndoles una visita, previo a que usted haga los primeros pagos.
										</p>
	
										<a href="#" class="btn btn-main-2 btn-round-full btn-icon hover-effect d-inline-block" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">
											Solicite este servicio <i class="bi bi-chevron-right ml-3"></i>
										</a>
									</div>
									<div class="row mt-4 align-items-center">
										<div class="col-3 col-md-2">
											<div class="about-img mt-4 mt-lg-0">
												<img src="{{ asset('images/proveedor.webp') }}" alt="Proveedor en China" class="img-fluid rounded shadow">
											</div>
										</div>
										<div class="col-9 col-md-9">
											<div class="about-content pl-4 mt-4 mt-lg-0">
												<h4 class="title-color font-weight-bold">Disponible en toda China</h4>
												<p class="mt-4 mb-5 text-justify">
													Un servicio indispensable para comenzar de forma segura una relación comercial basada en la confianza y si es necesario podemos hacer contratos de fiel cumplimiento.
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 scroll-animate d-none d-md-block" data-animation="animate__fadeInRight" data-delay="200">
									<div class="about-img mt-4 mt-lg-0">
										<img src="{{ asset('images/auditoria.jpg') }}" alt="Auditoría a proveedores" class="img-fluid rounded-lg shadow-lg">
									</div>
								</div>
							</div>
						</div>
	
						<!-- Pestaña 2: Consolidación de compras -->
						<div class="tab-pane fade" id="compras">
							<div class="row align-items-center">
								<div class="col-md-8 scroll-animate" data-animation="animate__fadeInLeft">
									<div class="about-content pl-lg-4 mt-4 mt-lg-0 text-center text-md-left">
										<h4 class="title-color font-weight-bold">Más proveedores en un solo despacho</h4>
										<p class="mt-4 mb-5 text-justify">
											Compre con sus proveedores regulares o experimente con los nuevos y nosotros le ayudamos a recibir y enviar en un solo contenedor o por pocos metros cúbicos también está disponible, consolidar es una de las mejores alternativas para aumentar la variedad y reducir el impacto de los fletes altos.
										</p>
	
										<a href="#" class="btn btn-main-2 btn-round-full btn-icon hover-effect d-inline-block" data-toggle="modal" data-target="#tarifas">
											Tarifas y más información <i class="bi bi-chevron-right ml-3"></i>
										</a>
									</div>
								</div>
								<div class="col-md-4 scroll-animate" data-animation="animate__fadeInRight" data-delay="200">
									<div class="img">
										<img src="{{ asset('images/container-loading.png') }}" alt="Consolidación de compras" class="img-fluid rounded-lg shadow-lg">
									</div>
								</div>
							</div>
						</div>
	
						<!-- Pestaña 3: Logística de despachos -->
						<div class="tab-pane fade" id="despachos">
							<div class="row align-items-center">
								<div class="col-md-8 scroll-animate" data-animation="animate__fadeInLeft">
									<div class="about-content pl-lg-4 mt-4 mt-lg-0 text-center text-md-left">
										<h4 class="title-color font-weight-bold">¿Solo necesita transporte desde China?</h4>
										<p class="mt-4 mb-5 text-justify">
											Nuestro servicio de logística le puede ofrecer las mejores tarifas de contenedores para Latinoamérica saliendo de cualquier puerto de China, contenedores para mercancía convencional, transporte de materiales peligrosos, autos, camiones, maquinaria, contenedores destapados, entre otros.
										</p>
	
										<a href="#" class="btn btn-main-2 btn-round-full btn-icon hover-effect d-inline-block" data-toggle="modal" data-target="#transporte">
											Más información y precios <i class="bi bi-chevron-right ml-3"></i>
										</a>
									</div>
								</div>
								<div class="col-md-4 scroll-animate" data-animation="animate__fadeInRight" data-delay="200">
									<div class="img">
										<img src="{{ asset('images/envio-de-carga-aerea-maritima.png') }}" alt="Logística de despachos" class="img-fluid rounded-lg shadow-lg">
									</div>
								</div>
							</div>
						</div>
	
						<!-- Pestaña 4: Ferias y visitas -->
						<div class="tab-pane fade" id="ferias">
							<div class="row align-items-center">
								<div class="col-md-8 scroll-animate" data-animation="animate__fadeInLeft">
									<div class="about-content pl-lg-4 mt-4 mt-lg-0 text-center text-md-left">
										<h4 class="title-color font-weight-bold">Las mejores ferias y mercados mayoristas</h4>
										<p class="mt-4 mb-5 text-justify">
											En abril y octubre son las ferias más completas de China pero durante todos los meses del año hay ferias especializadas por sector en muchas provincias donde le podemos asistir para que sea gratis su hospedaje, traslados y hacer entrevistas muy puntuales con los fabricantes.
										</p>
	
										<a href="#" class="btn btn-main-2 btn-round-full btn-icon hover-effect d-inline-block" data-toggle="modal" data-target="#visitas">
											Solicite este servicio <i class="bi bi-chevron-right ml-3"></i>
										</a>
									</div>
									<div class="row mt-4 align-items-center">
										<div class="col-3 col-md-2">
											<div class="about-img mt-4 mt-lg-0">
												<img src="{{ asset('images/yiwu3.webp') }}" alt="Mercado Yiwu" class="img-fluid rounded shadow">
											</div>
										</div>
										<div class="col-9 col-md-9">
											<div class="about-content pl-4 mt-4 mt-lg-0">
												<a href="{{ route('ferias') }}" class="text-decoration-none">
													<h4 class="title-color font-weight-bold hover-effect">
														Disponible en toda China todo el año <i class="bi bi-chevron-right ml-3"></i>
													</h4>
												</a>
												<p class="mt-4 mb-5 text-justify">
													Los mercados mayoristas son un buen lugar para visitar de marzo a noviembre por su variedad, buenos precios y por la facilidad de comparar productos y alternativas de proveedores que están en un mismo lugar con stock.
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 scroll-animate" data-animation="animate__fadeInRight" data-delay="200">
									<div class="about-img mt-4 mt-lg-0">
										<img src="{{ asset('images/ferias.jpg') }}" alt="Ferias en China" class="img-fluid rounded-lg shadow-lg">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	{{-- Donde comprar --}}
	<section class="section position-relative overflow-hidden" id="futian-section" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('images/yiwu.webp') }}') no-repeat center center/cover; min-height: 400px;">
		<div class="" style="background-color: rgba(0,0,0,0.3);"></div>
		<div class="container h-100">
			<div class="row align-items-center h-100">
				<div class="col-lg-12 text-center scroll-animate" data-animation="animate__fadeInUp">
					<div class="cta-content py-5">
						<div class="divider mb-4 mx-auto bg-white"></div>
						<span class="text-uppercase text-sm letter-spacing text-white d-block animate__animated animate__fadeIn font-weight-bold">
							¿Dónde comprar pocas cantidades a precios al mayor?
						</span>
						<h2 class="mb-5 text-white display-5 font-weight-bold scroll-animate" data-animation="animate__fadeInUp" data-delay="100">
							Conoce uno de los mercados mayoristas más grandes de toda China 
							<span class="text-danger" style="color:#fe3224 !important;">FUTIAN</span>
						</h2>
						<div class="scroll-animate" data-animation="animate__fadeInUp" data-delay="200">
							<a href="{{ route('mercado_futian') }}" class="btn btn-main-3 btn-round-full hover-effect">
								Más información <i class="bi bi-chevron-right ml-2"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="page-title py-5 position-relative overflow-hidden" style="background:#fbb942;" id="producto-ideal-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 text-center scroll-animate" data-animation="animate__fadeInDown">
					<div class="block">
						<h2 class="mb-4 font-weight-bold text-dark" style="font-size: 28px; color: #223a66 !important;">
							¿No estás seguro dónde comprar lo que necesitas?
						</h2>
						<div class="divider mx-auto bg-dark mb-4" style="height: 2px; width: 80px;"></div>
						<div class="scroll-animate" data-animation="animate__fadeInUp" data-delay="200">
							<a href="{{ route('producto_ideal') }}" 
							class="btn btn-round-full btn-main-2 btn-icon hover-effect px-4 py-2">
								<span class="d-flex align-items-center">
									Encuentra una solución
									<i class="bi bi-chevron-right ml-3"></i>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section about py-5 position-relative overflow-hidden bg-light" id="app-section">
		<div class="container">
			<div class="row align-items-center">
				<!-- Columna de contenido -->
				<div class="col-lg-6 order-lg-1 order-2">
					<div class="about-content pl-lg-4 mt-4 mt-lg-0">
						<h2 class="title-color display-5 font-weight-bold scroll-animate" 
							data-animation="animate__fadeInLeft" 
							style="color: #2c3e50 !important;">
							Supervise sus compras.
						</h2>
						
						<h5 class="mt-3 mb-4 text-danger scroll-animate" 
							data-animation="animate__fadeInLeft" 
							data-delay="100"
							style="color: #e96a61 !important;">
							I-YIWU fue creada para ahorrar tiempo en todos los procesos.
						</h5>
						
						<p class="mt-4 mb-5 lead scroll-animate" 
						   data-animation="animate__fadeInLeft" 
						   data-delay="200">
							Nuestra APP I-YIWU está disponible para todos que vienen de compras a la ciudad de Yiwu, 
							y requieren llevar un control completo o para los empresarios que aun sin venir quieren 
							tener las fotos, los precios y detalles de todos sus productos en un solo lugar y decidir 
							la cantidad a comprar y de inmediato obtener todos los cálculos listos.
						</p>
	
						<div class="scroll-animate text-center text-md-left" 
							 data-animation="animate__fadeInUp" 
							 data-delay="300">
							<a href="{{ route('app_futian') }}" 
							   class="btn btn-main-2 btn-round-full btn-icon hover-effect d-inline-block">
								<span class="d-flex align-items-center">
									Conozca más sobre esta APP
									<i class="bi bi-chevron-right ml-3"></i>
								</span>
							</a>
						</div>
					</div>
				</div>
				
				<!-- Columna de imagen -->
				<div class="col-lg-6 col-sm-12 order-lg-2 order-1">
					<div class="about-img mt-4 mt-lg-0 scroll-animate" 
						 data-animation="animate__fadeInRight">
						<img src="{{ asset('images/futian.jpg') }}" 
							 alt="APP I-YIWU para gestionar compras en Yiwu" 
							 class="img-fluid rounded-lg shadow-lg">
					</div>
				</div>
			</div>
		</div>
	</section>
	
	{{-- MODAL Auditoria a aproveedores --}}
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document" style="max-width: 900px;">
			<div class="modal-content" style="border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);">
				<!-- Encabezado de la modal -->
				<div class="modal-header d-flex align-items-center justify-content-between" style="background-color: #223a66; border-top-left-radius: 10px; border-top-right-radius: 10px; padding: 1rem 2rem;">
					<h5 class="modal-title text-center w-100 mb-0" style="color: white; font-size: 1.3rem; line-height: 1.4;">
						Solicitar cotización del servicio de auditoría
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white; position: absolute; right: 20px;">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
	
				<!-- Cuerpo de la modal -->
				<div class="modal-body" style="padding: 2rem;">
					<form class="appoinment-form" method="POST" action="{{ route('enviar.auditoria') }}">
						@csrf
						<div class="row">
							<!-- Columna izquierda -->
							<div class="col-md-6">
								<div class="form-group mb-4">
									<label for="recipient-name" class="col-form-label font-weight-bold">
										<i class="bi bi-person me-2"></i> Nombre del solicitante
									</label>
									<input type="text" class="form-control form-control-lg" id="recipient-name" name="nombre" required style="border-radius: 5px; border: 1px solid #ddd;">
								</div>
								<div class="form-group mb-4">
									<label for="recipient-email" class="col-form-label font-weight-bold">
										<i class="bi bi-envelope me-2"></i> Email
									</label>
									<input type="email" class="form-control form-control-lg" id="recipient-email" name="email" required style="border-radius: 5px; border: 1px solid #ddd;">
								</div>
								<div class="form-group mb-4">
									<label class="font-weight-bold d-block mb-3">
										<i class="bi bi-file-earmark-text me-2"></i> Tipo de auditoría
									</label>
									<div class="form-check mb-2">
										<input class="form-check-input" type="radio" name="tipo_auditoria" id="flexRadioDefault1" value="Documental">
										<label class="form-check-label" for="flexRadioDefault1">
											Documental
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="tipo_auditoria" id="flexRadioDefault2" value="Visita a la fabrica" checked>
										<label class="form-check-label" for="flexRadioDefault2">
											Visita a la fábrica
										</label>
									</div>
								</div>
							</div>
					
							<!-- Columna derecha -->
							<div class="col-md-6">
								<div class="form-group mb-4">
									<label for="recipient-country" class="col-form-label font-weight-bold">
										<i class="bi bi-globe me-2"></i> País
									</label>
									<select class="form-control form-control-lg" id="recipient-country" name="pais" required style="border-radius: 5px; border: 1px solid #ddd;">
										<option value="" disabled selected>Seleccione su país</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Usa">Estados Unidos</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Colombia">Colombia</option>
										<option value="Republica dominicana">República Dominicana</option>
										<option value="Panama">Panamá</option>
										<option value="otros">Otros</option>
									</select>
								</div>
								<div class="form-group mb-4">
									<label for="china-province" class="col-form-label font-weight-bold">
										<i class="bi bi-geo-alt-fill me-2"></i> Provincia en China
									</label>
									<select class="form-control form-control-lg" id="china-province" name="provincia" required style="border-radius: 5px; border: 1px solid #ddd;">
										<option value="" disabled selected>Seleccione primero la provincia</option>
										
									</select>
								</div>
								<div class="form-group mb-4">
									<label for="china-city" class="col-form-label font-weight-bold">
										<i class="bi bi-geo-alt me-2"></i> Ciudad en China
									</label>
									<select class="form-control form-control-lg" id="china-city" name="ciudad" required style="border-radius: 5px; border: 1px solid #ddd;" disabled>
										<option value="" disabled selected>Seleccione primero la provincia</option>
										
									</select>
								</div>
							</div>
						</div>
					
						<!-- Pie de la modal -->
						<div class="modal-footer" style="display: flex; justify-content: center; border-top: none; padding: 1.5rem 0 0 0;">
							<button type="submit" name="auditoria" class="btn btn-primary btn-lg" style="background-color: #223a66; border: none; padding: 10px 40px; border-radius: 25px; min-width: 200px;">
								ENVIAR
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	{{-- MODAL Ferias y visitas a centros --}}
	<div class="modal fade" id="visitas" tabindex="-1" role="dialog" aria-labelledby="visitasModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document" style="max-width: 900px;">
			<div class="modal-content" style="border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);">
				<!-- Encabezado de la modal -->
				<div class="modal-header d-flex align-items-center justify-content-between" style="background-color: #223a66; border-top-left-radius: 10px; border-top-right-radius: 10px; padding: 1.2rem 2rem;">
					<h5 class="modal-title text-center w-100 mb-0" style="color: white; font-size: 1.3rem; line-height: 1.4;">
						Solicitar el servicio de visita
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white; position: absolute; right: 20px;">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
	
				<!-- Cuerpo de la modal -->
				<div class="modal-body" style="padding: 2rem;">
					<form class="appoinment-form" method="POST" action="{{ route('enviar.visitas') }}">
						@csrf
						<div class="row">
							<!-- Columna izquierda -->
							<div class="col-md-6">
								<div class="form-group mb-4">
									<label for="visitas-nombre" class="col-form-label font-weight-bold">
										<i class="bi bi-person me-2"></i> Nombre del solicitante
									</label>
									<input type="text" class="form-control form-control-lg" id="visitas-nombre" name="nombre" required style="border-radius: 5px; border: 1px solid #ddd;">
								</div>
								<div class="form-group mb-4">
									<label for="visitas-email" class="col-form-label font-weight-bold">
										<i class="bi bi-envelope me-2"></i> Email
									</label>
									<input type="email" class="form-control form-control-lg" id="visitas-email" name="email" required style="border-radius: 5px; border: 1px solid #ddd;">
								</div>
								<div class="form-group mb-4">
									<label for="visitas-pais" class="col-form-label font-weight-bold">
										<i class="bi bi-globe me-2"></i> País
									</label>
									<select class="form-control form-control-lg" id="visitas-pais" name="pais" required style="border-radius: 5px; border: 1px solid #ddd;">
										<option value="" disabled selected>Seleccione su país</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Usa">Estados Unidos</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Colombia">Colombia</option>
										<option value="Republica dominicana">República Dominicana</option>
										<option value="Panama">Panamá</option>
										<option value="otros">Otros</option>
									</select>
								</div>
							</div>
					
							<!-- Columna derecha -->
							<div class="col-md-6">
								<div class="form-group mb-4">
									<label for="visitas-provincia" class="col-form-label font-weight-bold">
										<i class="bi bi-geo-alt-fill me-2"></i> Provincia en China
									</label>
									<select class="form-control form-control-lg" id="visitas-provincia" name="provincia" required style="border-radius: 5px; border: 1px solid #ddd;">
										<option value="" disabled selected>Seleccione una provincia</option>
										<option value="Beijing">Beijing</option>
										<option value="Shanghai">Shanghai</option>
										<option value="Guangdong">Guangdong</option>
										<option value="Zhejiang">Zhejiang</option>
										<option value="Jiangsu">Jiangsu</option>
										<option value="Fujian">Fujian</option>
										<option value="Sichuan">Sichuan</option>
										<option value="Hubei">Hubei</option>
										<option value="Shandong">Shandong</option>
										<option value="Liaoning">Liaoning</option>
									</select>
								</div>
					
								<div class="form-group mb-4">
									<label for="visitas-ciudad" class="col-form-label font-weight-bold">
										<i class="bi bi-geo-alt me-2"></i> Ciudad en China
									</label>
									<select class="form-control form-control-lg" id="visitas-ciudad" name="ciudad" required style="border-radius: 5px; border: 1px solid #ddd;">
										<option value="" disabled selected>Seleccione una ciudad</option>
									</select>
								</div>
					
								<div class="form-group mb-4">
									<label for="visitas-mensaje" class="col-form-label font-weight-bold">
										<i class="bi bi-chat-left-text me-2"></i> Mensaje
									</label>
									<textarea class="form-control form-control-lg" id="visitas-mensaje" name="mensaje" rows="4" required style="border-radius: 5px; border: 1px solid #ddd; min-height: 120px;"></textarea>
								</div>
							</div>
						</div>
					
						<!-- Pie de la modal -->
						<div class="modal-footer" style="display: flex; justify-content: center; border-top: none; padding: 1.5rem 0 0 0;">
							<button type="submit" class="btn btn-primary btn-lg" name="visita" style="background-color: #223a66; border: none; padding: 10px 40px; border-radius: 25px; min-width: 200px;">
								ENVIAR
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!--Modal Tarifas-->
	<div class="modal fade" id="tarifas" tabindex="-1" role="dialog" aria-labelledby="tarifasModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document" style="max-width: 900px;">
			<div class="modal-content" style="border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);">
				<!-- Encabezado de la modal -->
				<div class="modal-header d-flex align-items-center justify-content-between" style="background-color: #223a66; border-top-left-radius: 10px; border-top-right-radius: 10px; padding: 1.2rem 2rem;">
					<h5 class="modal-title text-center w-100 mb-0" style="color: white; font-size: 1.3rem; line-height: 1.4;">
						Tarifas de Consolidación y Transporte
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white; position: absolute; right: 20px;">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<!-- Cuerpo de la modal -->
				<div class="modal-body" style="padding: 2rem;">
					<div class="row align-items-center">
						<!-- Columna izquierda (Texto) -->
						<div class="col-lg-8">
							<div class="about-content pl-lg-4">
								<h3 class="mb-4 font-weight-bold" style="color: #005151;">
									Precios vigentes hasta fin de enero 2022
								</h3>
								<div class="divider bg-primary mb-4" style="height: 2px; width: 80px;"></div>
								<ul class="list-unstyled department-service">
									<li class="mb-3 d-flex align-items-start">
										<i class="bi bi-check2-square" style="color: #005151; font-size: 1.2rem;"></i>
										<span> 	295 USD / metros cúbico hasta Guayaquil</span>
									</li>
									<li class="mb-3 d-flex align-items-start">
										<i class="bi bi-check2-square me-2" style="color: #005151; font-size: 1.2rem;"></i>
										<span> 310 USD / metro cúbico hasta Caucedo</span>
									</li>
									<li class="mb-3 d-flex align-items-start">
										<i class="bi bi-check2-square me-2" style="color: #005151; font-size: 1.2rem;"></i>
										<span> 610 USD / metro cúbico puerta a puerta Venezuela</span>
									</li>
									<li class="mb-3 d-flex align-items-start">
										<i class="bi bi-check2-square me-2" style="color: #005151; font-size: 1.2rem;"></i>
										<span> 1950 USD por el servicio de consolidación por contenedor de 40Q</span>
									</li>
									<li class="mb-4 d-flex align-items-start">
										<i class="bi bi-exclamation-triangle mt-1 me-2" style="color: #dc3545; font-size: 1.2rem;"></i>
										<span><strong class="text-danger">* Nota:</strong> El precio del flete por contenedor se actualiza cada semana según el puerto final.</span>
									</li>
								</ul>
								<div class="alert alert-warning mt-4" style="background-color: #fff3cd; border-left: 4px solid #ffc107;">
									<i class="bi bi-info-circle-fill me-2"></i>
									<strong>Importante:</strong> Estas tarifas están sujetas a cambios según fluctuaciones del mercado.
								</div>
							</div>
						</div>

						<!-- Columna derecha (Imagen) -->
						<div class="col-lg-4">
							<div class="about-img mt-4 mt-lg-0 scroll-animate" data-animation="animate__fadeInRight">
								<img src="{{ asset('images/puerto.webp') }}" alt="Servicios de consolidación y transporte marítimo" class="img-fluid rounded-lg shadow" style="max-height: 400px; object-fit: cover;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Solicitar cotización del servicio de transporte-->
	<div class="modal fade" id="transporte" tabindex="-1" role="dialog" aria-labelledby="transporteModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document" style="max-width: 900px;">
			<div class="modal-content" style="border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);">
				<!-- Encabezado de la modal -->
				<div class="modal-header d-flex align-items-center justify-content-between" style="background-color: #223a66; border-top-left-radius: 10px; border-top-right-radius: 10px; padding: 1.2rem 2rem;">
					<h5 class="modal-title text-center w-100 mb-0" style="color: white; font-size: 1.3rem; line-height: 1.4;">
						Solicitar cotización del servicio de transporte
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white; position: absolute; right: 20px;">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
	
				<!-- Cuerpo de la modal -->
				<div class="modal-body" style="padding: 2rem;">
					<form class="appoinment-form" method="POST" action="{{ route('enviar.cotizacion') }}">
						@csrf
						<div class="row">
							<!-- Columna izquierda -->
							<div class="col-md-6">
								<div class="form-group mb-4">
									<label for="transporte-nombre" class="col-form-label font-weight-bold">
										<i class="bi bi-person me-2"></i> Nombre del solicitante
									</label>
									<input type="text" class="form-control form-control-lg" id="transporte-nombre" name="nombre" required style="border-radius: 5px; border: 1px solid #ddd;">
								</div>
								<div class="form-group mb-4">
									<label for="transporte-email" class="col-form-label font-weight-bold">
										<i class="bi bi-envelope me-2"></i> Email
									</label>
									<input type="email" class="form-control form-control-lg" id="transporte-email" name="email" required style="border-radius: 5px; border: 1px solid #ddd;">
								</div>
								<div class="form-group mb-4">
									<label for="transporte-puerto" class="col-form-label font-weight-bold">
										<i class="bi bi-geo-alt me-2"></i> Puertos de China
									</label>
									<select class="form-control form-control-lg" id="transporte-puerto" name="puerto" required style="border-radius: 5px; border: 1px solid #ddd;">
										<option value="" disabled selected>Seleccione un puerto</option>
										<option value="Shanghai">Puerto de Shanghai</option>
										<option value="Shenzhen">Puerto de Shenzhen</option>
										<option value="Ningbo-Zhoushan">Puerto de Ningbo-Zhoushan</option>
										<option value="Guangzhou">Puerto de Guangzhou</option>
										<option value="Hong Kong">Puerto de Hong Kong</option>
										<option value="Qingdao">Puerto de Qingdao</option>
										<option value="Dalian">Puerto de Dalian</option>
										<option value="Tianjin">Puerto de Tianjin</option>
									</select>
								</div>
							</div>
	
							<!-- Columna derecha -->
							<div class="col-md-6">
								<div class="form-group mb-4">
									<label for="transporte-tipo" class="col-form-label font-weight-bold">
										<i class="bi bi-box me-2"></i> Tipo de contenedor
									</label>
									<select class="form-control form-control-lg" id="transporte-tipo" name="tipo" required style="border-radius: 5px; border: 1px solid #ddd;">
										<option value="" disabled selected>Seleccione tipo</option>
										<option value="20 GP">20 GP (Pies estándar)</option>
										<option value="40 GP">40 GP (Pies estándar)</option>
										<option value="40 HQ">40 HQ (High Cube)</option>
										<option value="Otros">Otros (Especificar en mensaje)</option>
									</select>
								</div>
								<div class="form-group mb-4">
									<label for="transporte-destino" class="col-form-label font-weight-bold">
										<i class="bi bi-geo-alt-fill me-2"></i> Puerto destino
									</label>
									<input type="text" class="form-control form-control-lg" id="transporte-destino" name="destino" placeholder="Ej: Puerto de Guayaquil" required style="border-radius: 5px; border: 1px solid #ddd;">
								</div>
								<div class="form-group mb-4">
									<label for="transporte-mensaje" class="col-form-label font-weight-bold">
										<i class="bi bi-chat-left-text me-2"></i> Información adicional
									</label>
									<textarea class="form-control form-control-lg" id="transporte-mensaje" name="mensaje" rows="3" style="border-radius: 5px; border: 1px solid #ddd; min-height: 100px;" placeholder="Especifique tipo de mercancía, peso aproximado, etc."></textarea>
								</div>
							</div>
						</div>
	
						<!-- Pie de la modal -->
						<div class="modal-footer" style="display: flex; justify-content: center; border-top: none; padding: 1.5rem 0 0 0;">
							<button type="submit" class="btn btn-primary btn-lg" name="transporte" style="background-color: #223a66; border: none; padding: 10px 40px; border-radius: 25px; min-width: 200px;">
								<i class="bi bi-send-fill me-2"></i> ENVIAR SOLICITUD
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

{{-- Mensaje de éxito --}}
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show text-center py-2 px-3" role="alert" id="autoCloseAlert" style="
    position: fixed;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    max-width: 350px;
    width: auto;
    display: inline-block;
    margin: 0 auto;
    z-index: 9999;
">
    <div class="d-flex align-items-center justify-content-center">
        <i class="bi bi-check-circle-fill me-2"></i>
        <div class="small">{{ session('success') }}</div>
    </div>
</div>
@endif

{{-- Mensaje de error --}}
@if(session('error'))
<div class="alert alert-danger alert-dismissible fade show text-center py-2 px-3" role="alert" id="autoCloseAlert" style="
    position: fixed;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    max-width: 350px;
    width: auto;
    display: inline-block;
    margin: 0 auto;
    z-index: 9999;
">
    <div class="d-flex align-items-center justify-content-center">
        <i class="bi bi-exclamation-triangle-fill me-2"></i>
        <div class="small">{{ session('error') }}</div>
    </div>
</div>
@endif

<script>
	$(document).ready(function() {
		$('.appoinment-form').on('submit', function(e) {
			e.preventDefault();
			
			var form = $(this);
			var submitBtn = form.find('button[type="submit"]');
			var modal = $('#transporte');
			
			submitBtn.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Enviando...').prop('disabled', true);
			
			$.ajax({
				url: form.attr('action'),
				method: 'POST',
				data: form.serialize(),
				success: function(response) {
					if (response.success) {
						// Mostrar SweetAlert2
						Swal.fire({
							icon: 'success',
							title: '¡Éxito!',
							text: response.message,
							confirmButtonColor: '#223a66'
						}).then(() => {
							form.trigger('reset'); // Limpiar formulario
							modal.modal('hide'); // Cerrar modal
						});
					}
				},
				error: function(xhr) {
					Swal.fire({
						icon: 'error',
						title: 'Error',
						text: xhr.responseJSON?.message || 'Ocurrió un error',
						confirmButtonColor: '#223a66'
					});
				},
				complete: function() {
					submitBtn.html('<i class="bi bi-send-fill me-2"></i> ENVIAR SOLICITUD').prop('disabled', false);
				}
			});
		});
	});
</script>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		// Cierra automáticamente después de 5 segundos
		const alert = document.getElementById('autoCloseAlert');
		if (alert) {
			setTimeout(() => {
				const bsAlert = new bootstrap.Alert(alert);
				bsAlert.close();
			}, 3500);
		}
	
		// Permite cerrar manualmente
		document.querySelectorAll('[data-bs-dismiss="alert"]').forEach(button => {
			button.addEventListener('click', () => {
				const alert = button.closest('.alert');
				const bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
				bsAlert.close();
			});
		});
	});
</script>

<script>
    const ciudadesPorProvincia = {
        "Beijing": ["Beijing"],
		"Shanghai": ["Shanghai"],
		"Guangdong": ["Guangzhou", "Shenzhen", "Dongguan", "Foshan", "Zhuhai"],
		"Zhejiang": ["Hangzhou", "Ningbo", "Wenzhou", "Shaoxing", "Huzhou"],
		"Jiangsu": ["Nanjing", "Suzhou", "Wuxi", "Changzhou", "Xuzhou"],
		"Fujian": ["Xiamen", "Fuzhou", "Quanzhou", "Zhangzhou", "Putian"],
		"Sichuan": ["Chengdu", "Mianyang", "Leshan", "Yibin", "Dazhou"],
		"Hubei": ["Wuhan", "Xiangyang", "Yichang", "Jingzhou", "Huangshi"],
		"Shandong": ["Qingdao", "Jinan", "Yantai", "Weifang", "Linyi"],
		"Liaoning": ["Dalian", "Shenyang", "Anshan", "Fushun", "Dandong"]
    };

    const provinciaSelect = document.getElementById('visitas-provincia');
    const ciudadSelect = document.getElementById('visitas-ciudad');

    provinciaSelect.addEventListener('change', function () {
        const provinciaSeleccionada = this.value;
        const ciudades = ciudadesPorProvincia[provinciaSeleccionada] || [];

        ciudadSelect.innerHTML = '<option value="" disabled selected>Seleccione una ciudad</option>';

        ciudades.forEach(function (ciudad) {
            const option = document.createElement('option');
            option.value = ciudad;
            option.textContent = ciudad;
            ciudadSelect.appendChild(option);
        });
    });
</script>

<script>
	// Datos de provincias y ciudades de China
	const chinaLocations = {
		"Beijing": ["Beijing"],
		"Shanghai": ["Shanghai"],
		"Guangdong": ["Guangzhou", "Shenzhen", "Dongguan", "Foshan", "Zhuhai"],
		"Zhejiang": ["Hangzhou", "Ningbo", "Wenzhou", "Shaoxing", "Huzhou"],
		"Jiangsu": ["Nanjing", "Suzhou", "Wuxi", "Changzhou", "Xuzhou"],
		"Fujian": ["Xiamen", "Fuzhou", "Quanzhou", "Zhangzhou", "Putian"],
		"Sichuan": ["Chengdu", "Mianyang", "Leshan", "Yibin", "Dazhou"],
		"Hubei": ["Wuhan", "Xiangyang", "Yichang", "Jingzhou", "Huangshi"],
		"Shandong": ["Qingdao", "Jinan", "Yantai", "Weifang", "Linyi"],
		"Liaoning": ["Dalian", "Shenyang", "Anshan", "Fushun", "Dandong"]
	};
	
	// Seleccionar elementos del DOM
	const provinceSelect = document.getElementById('china-province');
	const citySelect = document.getElementById('china-city');
	
	// Llenar las provincias
	Object.keys(chinaLocations).forEach(province => {
		const option = document.createElement('option');
		option.value = province;
		option.textContent = province;
		provinceSelect.appendChild(option);
	});
	
	// Evento cuando se selecciona una provincia
	provinceSelect.addEventListener('change', function() {
		const selectedProvince = this.value;
		
		// Limpiar y deshabilitar el selector de ciudades
		citySelect.innerHTML = '<option value="" disabled selected>Seleccione una ciudad</option>';
		citySelect.disabled = !selectedProvince;
		
		if (selectedProvince) {
			// Llenar las ciudades correspondientes a la provincia seleccionada
			chinaLocations[selectedProvince].forEach(city => {
				const option = document.createElement('option');
				option.value = city;
				option.textContent = city;
				citySelect.appendChild(option);
			});
			citySelect.disabled = false;
		}
	});
</script>
@endsection
