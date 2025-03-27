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
    
    .content-block {
        margin-bottom: 40px;
    }
</style>

<div id="top">

<section class="page-title bg-3">
  <div class="overlay2"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white text-animate">Productos ideales</span>
          <h1 class="text-capitalize mb-5 text-lg text-animate delay-1" >¿Productos?</h1>
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
                    <h2 class="title-color text-animate delay-1" style="font-size:2rem;">¿No está seguro donde comprar lo que necesita?</h2>
                    <h5 class="title-highlight text-animate delay-2" style="line-height:1.8;">
                        En China hay diferentes lugares donde se puede comprar al mayor o al detal con buenos precios<br>
                        pero si se trata de comprar al mayor le podemos dar las siguientes recomendaciones.
                    </h5>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="about-content pl-4 mt-4 mt-lg-0 content-block text-animate delay-1">
                    <h3 class="mt-5 mb-4">Recomendaciones</h3>
                    <div class="divider my-4" style="background:#ce180a; height:2px;"></div>
                    <ul class="check-list text-justify">
                        <li class="text-animate delay-2">
                            <i class="icofont-check"></i>
                            Asistir a la feria de Cantón en el mes de abril-Mayo o en Octubre-noviembre para tener la oportunidad de conocer varios fabricantes a gran escala de miles de productos, más información en su página web. 
                            <a class="text-primary" href="https://www.cantonfair.org.cn">www.cantonfair.org.cn</a>
                        </li>
                        <li class="text-animate delay-3">
                            <i class="icofont-check"></i>
                            Asistir a las ferias especializadas que durante todo el año hay en China. 
                            <a class="text-primary" href="ferias.php">www.hkmaoyi.com/ferias</a>
                        </li>
                        <li class="text-animate delay-3">
                            <i class="icofont-check"></i>
                            Páginas web especializadas: 
                            <a class="text-primary" href="https://www.alibaba.com">Alibaba.com</a>, 
                            <a class="text-primary" href="https://www.made-in-china.com">made-in-china.com</a>, 
                            <a class="text-primary" href="https://www.chinagoods.com">chinagoods.com</a>, 
                            <a class="text-primary" href="https://www.yiwugo.com">yiwugo.com.</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6 mt-4">
                <div class="about-img">
                    <img src="images/feria2.jpg" alt="" class="img-fluid">
                </div>
            </div>
            
            <div class="col-lg-12">
                <div class="about-content pl-4 mt-4 mt-lg-0 text-center content-block text-animate delay-2">
                    <p class="text-justify" style="line-height:1.8;">
                        Para cada una de estas páginas existe un método de compra similar pero con estrategias de soporte al cliente diferentes y ofrecen su base de datos para localizar productos y proveedores que están en China, Asia, Europa, Latinoamérica entre otros y todo depende de que tan familiar se haga usted con el formato que tiene cada una, puede ver en los bordes laterales de la web y en el encabezado los diferentes filtros para clasificar los productos.
                    </p>
                </div>
            </div>


				<div class="col-lg-12">
					 <div class="container m-3">
				         <div class="row">
				         <div class="col-lg-6 p-2">
				                <div class="contact-block mb-4 mb-lg-0">
				                    <div class="embed-responsive embed-responsive-16by9">
									<video class="embed-responsive-item" controls>
										<source src="videos/compra1.mp4" type="video/mp4">
										Tu navegador no soporta el elemento de video.
									</video>
									  
									</div>
				                </div>
				            </div>
				            <div class="col-lg-6 p-2">
				                <div class="contact-block mb-4 mb-lg-0">
				                    <div class="embed-responsive embed-responsive-16by9">
									<video class="embed-responsive-item" controls>
										<source src="videos/compra2.mp4" type="video/mp4">
										Tu navegador no soporta el elemento de video.
									</video>
									  
									</div>
				                </div>
				            </div>
				            <div class="col-lg-6 p-2">
				                <div class="contact-block mb-4 mb-lg-0">
				                    <div class="embed-responsive embed-responsive-16by9">
									<video class="embed-responsive-item" controls>
										<source src="videos/compra3.mp4" type="video/mp4">
										Tu navegador no soporta el elemento de video.
									</video>
									 
									</div>
				                </div>
				            </div>
				            <div class="col-lg-6 p-2">
				                <div class="contact-block mb-4 mb-lg-0">
				                  <div class="embed-responsive embed-responsive-16by9">
								  <video class="embed-responsive-item" controls>
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
					<div class="about-content pl-4 mt-4 mt-lg-0 text-center content-block text-animate delay-1">
						<h2 class="title-color" style="font-size:2rem;">¿Es seguro comprar en estas empresas?</h2>
						<p class="text-justify" style="line-height:1.8;">
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
	
	</div>
	@endsection
