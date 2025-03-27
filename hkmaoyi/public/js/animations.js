// Script para animaciones al hacer scroll

	document.addEventListener('DOMContentLoaded', function() {
		// Configuración del Intersection Observer
		const observerOptions = {
			threshold: 0.1,
			rootMargin: '0px 0px -50px 0px'
		};
	
		const observer = new IntersectionObserver(function(entries, observer) {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					const element = entry.target;
					const animation = element.getAttribute('data-animation');
					const delay = element.getAttribute('data-delay') || 0;
					
					// Reset animation
					element.style.opacity = '0';
					element.classList.remove('animate__animated', animation);
					
					// Apply animation after a short delay to allow for reset
					setTimeout(() => {
						element.style.opacity = '1';
						element.classList.add('animate__animated', animation);
					}, 50);
					
					// Desconectar después de la primera animación si lo prefieres
					// observer.unobserve(element);
				}
			});
		}, observerOptions);
	
		// Observar todos los elementos con la clase scroll-animate
		document.querySelectorAll('.scroll-animate').forEach(element => {
			observer.observe(element);
		});
	
		// También observamos la sección completa para reiniciar animaciones al volver
		const sectionObserver = new IntersectionObserver(function(entries) {
			entries.forEach(entry => {
				if (!entry.isIntersecting) {
					// Cuando la sección sale de la vista, reseteamos las animaciones
					entry.target.querySelectorAll('.scroll-animate').forEach(el => {
						el.style.opacity = '0';
						el.classList.remove('animate__animated');
						const animation = el.getAttribute('data-animation');
						el.classList.remove(animation);
					});
				}
			});
		}, {threshold: 0.1});
	
		const section = document.getElementById('clientes-section');
		if (section) {
			sectionObserver.observe(section);
		}
	});
