<div id="instagram-feed" class="instagram-feed"></div>

<script>
// Configuración (reemplaza con tus datos)
const ACCESS_TOKEN = 'TU_TOKEN_DE_ACCESO'; // El token que obtuviste
const LIMIT = 3; // Número de publicaciones a mostrar

// Función para obtener y mostrar posts
async function loadInstagramPosts() {
  try {
    // 1. Obtener las publicaciones desde la API
    const response = await fetch(`https://graph.instagram.com/me/media?fields=id,caption,media_url,media_type,permalink&limit=${LIMIT}&access_token=${ACCESS_TOKEN}`);
    const data = await response.json();

    // 2. Procesar y mostrar los datos
    const feedContainer = document.getElementById('instagram-feed');
    
    if (data.data && data.data.length > 0) {
      feedContainer.innerHTML = data.data.map(post => `
        <div class="instagram-post">
          <a href="${post.permalink}" target="_blank" rel="noopener noreferrer">
            ${post.media_type === 'VIDEO' 
              ? `<video controls><source src="${post.media_url}" type="video/mp4"></video>`
              : `<img src="${post.media_url}" alt="${post.caption || 'Post de Instagram'}">`}
          </a>
          ${post.caption ? `<p>${post.caption.substring(0, 100)}${post.caption.length > 100 ? '...' : ''}</p>` : ''}
        </div>
      `).join('');
    } else {
      feedContainer.innerHTML = '<p>No se encontraron publicaciones.</p>';
    }

  } catch (error) {
    console.error('Error al cargar posts:', error);
    document.getElementById('instagram-feed').innerHTML = '<p>Error al cargar el feed de Instagram.</p>';
  }
}

// Cargar posts cuando la página esté lista
document.addEventListener('DOMContentLoaded', loadInstagramPosts);
</script>

<style>
/* Estilos responsivos */
.instagram-feed {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  margin: 30px 0;
}

.instagram-post {
  border: 1px solid #ddd;
  border-radius: 8px;
  overflow: hidden;
  transition: transform 0.3s;
}

.instagram-post:hover {
  transform: scale(1.02);
}

.instagram-post img, 
.instagram-post video {
  width: 100%;
  height: auto;
  display: block;
}

.instagram-post p {
  padding: 12px;
  margin: 0;
  font-size: 14px;
  color: #333;
}

@media (max-width: 600px) {
  .instagram-feed {
    grid-template-columns: 1fr;
  }
}
</style>