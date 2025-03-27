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
</style>

<div class="top">

	<section class="page-title bg-1">
		<div class="overlay2"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="block text-center"><br><br>
						<span class="text-white">Te ayudamos a llegar a las mejores</span>
						<h1 class="text-center mb-5 text-lg">Ferias y mercados mayoristas.</h1>

					</div>
				</div>
				<div class="col-md-6">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="videos/ferias.mp4" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section about">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
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
									<div class="carousel-item">
										<img class="d-block w-100" src="images/image4.jpeg" alt="Third slide">

									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="images/image5.jpeg" alt="Third slide">

									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="images/image6.jpeg" alt="Third slide">

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
							<center><a href="https://www.cantonfair.org.cn/en-US" target="_blank" class="btn btn-main-2 btn-round-full btn-icon">Ver Ferias<i class="icofont-simple-right ml-3"></i></a></center>
						</div>
						<div class="col-12 mt-4">
						<div class="about-content pl-4 mt-4 mt-lg-0">
							<h3 class="mt-5 mb-4">Nuestros servicios</h3>
							<div class="divider my-4"></div>
							<ul class="list-unstyled department-service">
								<!-- Registrar al visitante -->
								<li>
									<i class="bi bi-person-check me-2"></i> Registrar al visitante
								</li>
								<!-- Recepción en el aeropuerto -->
								<li>
									<i class="bi bi-airplane me-2"></i> Recepción en el aeropuerto
								</li>
								<!-- Traslados del hotel a las ferias -->
								<li>
									<i class="bi bi-car-front me-2"></i> Traslados del hotel a las ferias
								</li>
								<!-- Traducción y asistencia -->
								<li>
									<i class="bi bi-translate me-2"></i> Traducción y asistencia
								</li>
								<!-- Coordinación de visitas a fábricas -->
								<li>
									<i class="bi bi-building me-2"></i> Coordinación de visitas a fábricas
								</li>
								<!-- Traslados internos en China y despedida en aeropuerto -->
								<li>
									<i class="bi bi-geo-alt me-2"></i> Traslados internos en China y despedida en aeropuerto
								</li>
							</ul>
						</div>
					</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="about-content pl-4 mt-4 mt-lg-0">
						<div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
							<!--Indicators-->
							<ol class="carousel-indicators">
								<li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
								<li data-target="#video-carousel-example2" data-slide-to="1"></li>
								<li data-target="#video-carousel-example2" data-slide-to="2"></li>
							</ol>
							<!--/.Indicators-->
							<!--Slides-->
							<div class="carousel-inner" role="listbox">
								<!-- First slide -->
								<div class="carousel-item active">
									<!--Mask color-->
									<div class="view embed-responsive embed-responsive-16by9">
										<!--Video source-->
										<video class="video-fluid" autoplay loop muted>
											<source src="videos/video1.mp4" type="video/mp4" style="height: 100px;" />
										</video>
										<div class="mask rgba-indigo-light"></div>
									</div>

									<!--Caption-->
									<div class="carousel-caption">
										<div class="animated fadeInDown" style="background: #223a6696;">
											<h3 class="h3-responsive text-white p-2">Feria </h3>
										</div>
									</div>
									<!--Caption-->
								</div>
								<div class="carousel-item">
									<!--Mask color-->
									<div class="view embed-responsive embed-responsive-16by9">
										<!--Video source-->
										<video class="video-fluid" autoplay loop muted>
											<source src="videos/video2.mp4" type="video/mp4" style="height: 100px;" />
										</video>
										<div class="mask rgba-indigo-light"></div>
									</div>

									<!--Caption-->
									<div class="carousel-caption">
										<div class="animated fadeInDown" style="background:#223a6696;">
											<h3 class="h3-responsive text-white p-2">Feria </h3>
										</div>
									</div>
									<!--Caption-->
								</div>
								<div class="carousel-item">
									<!--Mask color-->
									<div class="view embed-responsive embed-responsive-16by9">
										<!--Video source-->
										<video class="video-fluid" autoplay loop muted>
											<source src="videos/video3.mp4" type="video/mp4" style="height: 100px;" />
										</video>
										<div class="mask rgba-indigo-light"></div>
									</div>

									<!--Caption-->
									<div class="carousel-caption">
										<div class="animated fadeInDown" style="background: #223a6696;">
											<h3 class="h3-responsive text-white p-2">Mercado YIWU</h3>
										</div>
									</div>
									<!--Caption-->
								</div>

								<!-- /.Third slide -->
							</div>
							<!--/.Slides-->
							<!--Controls-->
							<a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
							<!--/.Controls-->
						</div>
						<br>
						<center>
							<h4 class="title-color text-center">Te llevamos a las mejores ferias y mercados.</h4>
							<a href="#" class="btn btn-main-2 btn-round-full btn-icon text-center" data-toggle="modal" data-target="#visitas">Solicite una cotización<i class="icofont-simple-right ml-3"></i></a>
						</center>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div style="margin-top: 80px;" class="modal fade" id="visitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content" style="border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);">
				<!-- Encabezado de la modal -->
				<div class="modal-header d-flex align-items-center justify-content-between" style="background-color: #223a66; border-top-left-radius: 10px; border-top-right-radius: 10px;">
					<h5 class="modal-title text-center w-100 mb-0" style="color: white; font-size: 1.5rem;">
						Solicitar el servicio de visita
					</h5>
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
										<option>Venezuela</option>
										<option>Usa</option>
										<option>Ecuador</option>
										<option>Colombia</option>
										<option>República Dominicana</option>
										<option>Panamá</option>
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
									<textarea class="form-control" id="recipient-name" name="mensaje" required style="border-radius: 5px; border: 1px solid #ddd; padding: 10px;"></textarea>
								</div>
							</div>
						</div>

						<!-- Pie de la modal -->
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
@endsection
