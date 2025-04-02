document.addEventListener('DOMContentLoaded', function() {
    // Configuración del Intersection Observer
    const observerOptions = {
        threshold: 0.2, // Aumentamos el threshold para mayor estabilidad
        rootMargin: '0px 0px -100px 0px' // Ajustamos el margen negativo
    };

    const observer = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                
                // Solo animar si no ha sido animado antes
                if (!element.classList.contains('has-animated')) {
                    const animation = element.getAttribute('data-animation');
                    const delay = element.getAttribute('data-delay') || 0;
                    
                    // Aplicar animación con el delay especificado
                    setTimeout(() => {
                        element.style.opacity = '1';
                        element.classList.add('animate__animated', animation);
                        element.classList.add('has-animated'); // Marcar como animado
                    }, delay);
                    
                    // Dejar de observar el elemento después de animarlo
                    observer.unobserve(element);
                }
            }
        });
    }, observerOptions);

    // Observar todos los elementos con la clase scroll-animate
    document.querySelectorAll('.scroll-animate').forEach(element => {
        // Configurar estado inicial
        element.style.opacity = '0';
        element.style.willChange = 'opacity, transform'; // Mejora el rendimiento
        observer.observe(element);
    });
});