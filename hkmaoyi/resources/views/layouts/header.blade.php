<style>
    /* Estilos base del header */
    .header-fixed {
        transition: all 0.3s ease-in-out;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    }

    .header-hidden {
        transform: translateY(-100%);
        opacity: 0;
    }

    .header-visible {
        transform: translateY(0);
        opacity: 1;
    }

    /* Header Top Bar */
    .header-top-bar {
        background: #005151;
        padding: 8px 0;
        font-size: 0.85rem;
    }

    .top-bar-info {
        margin-bottom: 0;
    }

    .top-bar-info li {
        display: inline-block;
        margin-right: 15px;
        color: white;
    }

    .top-bar-info a {
        color: white;
        text-decoration: none;
        transition: color 0.3s;
    }

    .top-bar-info a:hover {
        color: #ce180a;
    }

    .top-bar-info i {
        margin-right: 5px;
    }

    /* Navbar */
    .navbar {
        padding: 10px 0;
    }

    .navbar-brand img {
        max-height: 50px;
        width: auto;
        transition: all 0.3s;
    }

    .nav-link {
        color: #005151 !important;
        font-weight: 500;
        padding: 10px 15px !important;
        transition: all 0.3s;
    }

    .nav-link:hover {
        color: #ce180a !important;
    }

    .nav-link i {
        margin-right: 5px;
    }

    .dropdown-menu {
        border: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .dropdown-item {
        padding: 8px 20px;
    }

    .dropdown-item i {
        width: 20px;
        text-align: center;
    }

    /* Botón de menú móvil */
    .navbar-toggler {
        border: none;
        padding: 0.5rem;
    }

    .navbar-toggler:focus {
        outline: none;
        box-shadow: none;
    }

    /* Estilos responsive */
    @media (max-width: 991.98px) {
        .header-top-bar {
            display: none; /* Ocultamos la barra superior en móviles */
        }
        
        .navbar {
            padding: 10px 0;
        }
        
        .navbar-brand img {
            max-height: 40px;
        }
        
        .navbar-collapse {
            background: white;
            padding: 20px;
            margin-top: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .nav-item {
            margin-bottom: 5px;
        }
        
        .dropdown-menu {
            box-shadow: none;
            border-left: 2px solid #005151;
            margin-left: 15px;
        }
    }

    @media (max-width: 767.98px) {
        .navbar-brand img {
            max-height: 35px;
        }
        
        .nav-link {
            padding: 8px 0 !important;
        }
    }

    @media (max-width: 575.98px) {
        .navbar-brand img {
            max-height: 30px;
        }
    }
</style>

<header style="margin-bottom: 100px;">
<div class="fixed-top header-fixed" style="background-color: white; z-index: 1030;">
    <!-- Header Top Bar (solo visible en desktop) -->
    <div class="header-top-bar d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <ul class="top-bar-info list-inline-item pl-0 mb-0">
                        <li class="list-inline-item">
                            <a href="mailto:asia@hkmaoyi.com">
                                <i class="bi bi-envelope-at"></i> asia@hkmaoyi.com
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <i class="bi bi-geo-alt"></i> ZHEJIANG SHEIN JINDONQUI 17 ZHUAN 1 DANYUAN #3A01 JINHUA 321000 ZHEJIANG CH
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 text-lg-right">
                    <div class="top-right-bar">
                        <a href="tel:+8657985595072">
                            <i class="bi bi-telephone"></i>
                            <span>+86 579 85595072</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navigation">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo5.png') }}" alt="HKMAOYI Logo" class="img-fluid">
            </a>

            <!-- Botón de menú para móviles -->
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span style="color:#005151;" class="icofont-navigation-menu"></span>
            </button>

            <!-- Menú principal -->
            <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav ml-auto">
                    <!-- Conocenos -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('conocenos') }}">
                            <i class="bi bi-people me-2"></i> Conocenos
                        </a>
                    </li>

                    <!-- Servicios (Dropdown) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-gear me-2"></i> Servicios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            <li><a class="dropdown-item" href="{{ route('producto_ideal') }}">
                                <i class="bi bi-box-seam me-2"></i> Proveedores
                            </a></li>
                            <li><a class="dropdown-item" href="{{ route('ferias') }}">
                                <i class="bi bi-calendar-event me-2"></i> Ferias
                            </a></li>
                        </ul>
                    </li>

                    <!-- Catalogos -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('proveedores') }}">
                            <i class="bi bi-journal me-2"></i> Catalogos
                        </a>
                    </li>

                    <!-- E-commerce -->
                    <li class="nav-item">
                        <a class="nav-link" href="http://mail.qiye.163.com/?hl=en_US" target="_blank">
                            <i class="bi bi-cart me-2"></i> E-commerce
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
</header>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const header = document.querySelector(".fixed-top");
    let lastScroll = 0;
    const scrollThreshold = 100;
    const hideThreshold = 200;

    function handleScroll() {
        const currentScroll = window.scrollY;
        
        if (currentScroll <= 0) {
            header.classList.remove("header-hidden");
            return;
        }
        
        if (currentScroll > lastScroll && currentScroll > scrollThreshold) {
            // Scrolling down
            header.classList.add("header-hidden");
        } else if (currentScroll < lastScroll - 10 || currentScroll < hideThreshold) {
            // Scrolling up or near top
            header.classList.remove("header-hidden");
        }
        
        lastScroll = currentScroll;
    }

    // Mejor manejo para móviles (touch devices)
    function handleTouchStart() {
        if (window.scrollY > scrollThreshold) {
            header.classList.remove("header-hidden");
        }
    }

    window.addEventListener("scroll", handleScroll, { passive: true });
    window.addEventListener("touchstart", handleTouchStart, { passive: true });
});
</script>