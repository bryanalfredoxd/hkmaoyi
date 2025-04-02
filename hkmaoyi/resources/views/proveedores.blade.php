@extends('layouts.app')

@section('content')

<div id="top">
    
    <style>
        /* Animaciones optimizadas para móviles */
        .text-animate {
            opacity: 0;
            animation: fadeInUp 1s forwards;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(10px); /* Menos movimiento para móviles */
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
        
        /* Mejoras responsive */
        .title-highlight {
            color: #ce180a;
            text-shadow: 0 1px 2px rgba(0,0,0,0.1);
        }
        
        .check-list li {
            margin-bottom: 12px;
            padding-left: 25px;
            position: relative;
            line-height: 1.5;
        }
        
        .check-list i {
            position: absolute;
            left: 0;
            top: 3px;
            color: #ce180a;
            font-size: 1em;
        }
        
        .content-block {
            margin-bottom: 30px;
        }
        
        /* Optimización para móviles */
        @media (max-width: 767.98px) {
            .page-title h1 {
                font-size: 1.8rem !important;
            }
            
            .about-content h2 {
                font-size: 1.5rem !important;
            }
            
            .about-content p, .check-list li {
                font-size: 0.95rem;
                line-height: 1.6;
            }
            
            .embed-responsive {
                margin-bottom: 15px;
            }
        }
        
        @media (max-width: 575.98px) {
            .check-list {
                padding-left: 15px;
            }
            
            .about-content {
                padding-left: 0 !important;
            }
        }
    </style>
    

    <section class="page-title bg-3">
        <div class="overlay2"></div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="block text-center py-4 py-lg-5">
                <span class="text-white text-animate d-block mb-3">Lista de proveedores</span>
                <h1 class="text-capitalize text-lg text-animate delay-1">Catálogos</h1>
              </div>
            </div>
          </div>
        </div>
      </section>
    
    <div class="container my-5">
        <h2 class="text-center mb-4">Últimas Publicaciones en Instagram</h2>
        <div id="instagram-feed" class="row g-4 justify-content-center"></div>
      </div>
      
      <script>
      // Configuración (reemplaza con tus datos)
      const ACCESS_TOKEN = 'IGAAKMwu5bHdlBZAFBJVWlIeXBHQ2toeHJOakl4VlQ0c1dBZA0Q1VFVBUVp0eDBwOEEwRTBKMjducEl0YmJwa291eDhXY0Y2RW1hZAnVTb0lldFpjMTJOdFFmUEswU0xfcUZALWXRLSVlob1FZAcUxHd1VfR3VabUhpYkQwdGRlNWJ2TQZDZD';
      const LIMIT = 3;
      
      async function loadInstagramPosts() {
        try {
          const response = await fetch(`https://graph.instagram.com/me/media?fields=id,caption,media_url,media_type,permalink,thumbnail_url&limit=${LIMIT}&access_token=${ACCESS_TOKEN}`);
          const data = await response.json();
      
          const feedContainer = document.getElementById('instagram-feed');
          
          if (data.data && data.data.length > 0) {
            feedContainer.innerHTML = data.data.map(post => `
              <div class="col-md-4 col-sm-6">
                <div class="card instagram-card h-100 shadow-sm">
                  <div class="card-img-top instagram-media-container">
                    <a href="${post.permalink}" target="_blank" rel="noopener noreferrer" class="text-decoration-none">
                      ${post.media_type === 'VIDEO' 
                        ? `<video class="img-fluid rounded-top" controls poster="${post.thumbnail_url || ''}">
                           <source src="${post.media_url}" type="video/mp4">
                           </video>`
                        : `<img src="${post.media_url}" class="img-fluid rounded-top" alt="${post.caption || 'Instagram post'}">`}
                    </a>
                  </div>
                  <div class="card-body">
                    ${post.caption ? `<p class="card-text">${truncateText(post.caption, 120)}</p>` : ''}
                  </div>
                  <div class="card-footer bg-transparent border-top-0">
                    <a href="${post.permalink}" target="_blank" class="btn btn-outline-primary btn-sm">
                      <i class="fab fa-instagram me-1"></i> Ver en Instagram
                    </a>
                  </div>
                </div>
              </div>
            `).join('');
          } else {
            feedContainer.innerHTML = '<div class="col-12 text-center"><p class="text-muted">No se encontraron publicaciones recientes.</p></div>';
          }
      
        } catch (error) {
          console.error('Error:', error);
          document.getElementById('instagram-feed').innerHTML = `
            <div class="col-12">
              <div class="alert alert-warning">
                <i class="fas fa-exclamation-triangle me-2"></i>
                Error al cargar las publicaciones. Por favor intenta más tarde.
              </div>
            </div>`;
        }
      }
      
      function truncateText(text, maxLength) {
        return text.length > maxLength ? text.substring(0, maxLength) + '...' : text;
      }
      
      document.addEventListener('DOMContentLoaded', loadInstagramPosts);
      </script>
      
      
      
      <style>
      .instagram-card {
        transition: all 0.3s ease;
        border-radius: 0.5rem;
        overflow: hidden;
      }
      
      .instagram-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
      }
      
      .instagram-media-container {
        position: relative;
        padding-top: 100%; /* Aspect ratio 1:1 */
        overflow: hidden;
      }
      
      .instagram-media-container img,
      .instagram-media-container video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      
      .card-text {
        color: #555;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
      }
      
      /* Efecto hover para el botón */
      .btn-outline-primary:hover {
        background-color: #405DE6;
        border-color: #405DE6;
        color: white;
      }
      
      /* Responsive adjustments */
      @media (max-width: 768px) {
        .col-md-4 {
          flex: 0 0 50%;
          max-width: 50%;
        }
      }
      
      @media (max-width: 576px) {
        .col-md-4, .col-sm-6 {
          flex: 0 0 100%;
          max-width: 100%;
        }
      }
      </style>
      
 
    
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animación optimizada para móviles
        const animateElements = document.querySelectorAll('.text-animate');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.animationPlayState = 'running';
                    observer.unobserve(entry.target); // Mejor rendimiento
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