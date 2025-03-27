<style>
    /* Estilos para el header */
    .header-fixed {
        transition: all 0.3s ease-in-out;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .header-hidden {
        opacity: 0;
        transform: translateY(-100%);
        pointer-events: none;
    }

    .header-visible {
        opacity: 1;
        transform: translateY(0);
        pointer-events: auto;
    }

    .header-top-bar {
        font-size: 0.9rem;
        padding: 8px 0;
    }

    .header-top-bar a {
        color: #fff;
        transition: color 0.3s ease;
    }

    .header-top-bar a:hover {
        color: #e0e0e0;
        text-decoration: none;
    }

    .navigation {
        padding: 15px 0;
    }

    .navbar-brand img {
        max-height: 50px;
        transition: all 0.3s ease;
    }

    .nav-link {
        color: #333 !important;
        font-weight: 500;
        padding: 8px 15px !important;
        transition: all 0.3s ease;
        position: relative;
    }

    .nav-link:hover {
        color: #005151 !important;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 50%;
        background-color: #005151;
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }

    .nav-link:hover::after {
        width: 70%;
    }

    .dropdown-menu {
        border: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        padding: 10px 0;
    }

    .dropdown-item {
        padding: 8px 20px;
        transition: all 0.3s ease;
    }

    .dropdown-item:hover {
        background-color: #f8f9fa;
        color: #005151;
        transform: translateX(5px);
    }

    @media (max-width: 991.98px) {
        .navbar-collapse {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .nav-link::after {
            display: none;
        }

        .dropdown-menu {
            box-shadow: none;
            padding-left: 20px;
        }
    }

    .navbar-toggler {
        border: none;
        padding: 0;
    }

    .navbar-toggler:focus {
        outline: none;
        box-shadow: none;
    }

    .icofont-navigation-menu {
        font-size: 1.8rem;
    }
</style>

<header>
    <!-- Header Top Bar (Estático) -->
    <div style="background: #005151;">
        <div class="header-top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <ul class="top-bar-info list-inline-item pl-0 mb-0">
                            <li class="list-inline-item">
                                <a href="mailto:asia@hkmaoyi.com">
                                    <i class="bi bi-envelope-at"></i> asia@hkmaoyi.com
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <i class="bi bi-geo-alt"></i> ZHEJIANG SHEIN JINDONQUI 17 ZHUAN 1 DANYUAN #3A01 JINHUA 321000 ZHEJIANG CH
                                China
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 text-lg-right">
                        <div class="top-right-bar mt-2 mt-lg-0">
                            <a href="tel:+8657985595072">
                                <i class="bi bi-telephone"></i>
                                <span>+86 579 85595072</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar (Pegajosa) -->
    <div class="fixed-top header-fixed" style="background-color: white; z-index: 1000; top: 0;">
        <nav class="navbar navbar-expand-lg navigation">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/logo5.png') }}" alt="" class="img-fluid">
                </a>

                <!-- Botón de menú para dispositivos móviles -->
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
                                <i class="bi bi-gear me-2"></i> Servicios <i class="icofont-thin-down"></i>
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

        function handleScroll() {
            const currentScroll = window.scrollY;
            
            // Determinar dirección del scroll
            if (currentScroll > lastScroll && currentScroll > 100) {
                // Scrolling hacia abajo
                header.classList.add("header-hidden");
            } else {
                // Scrolling hacia arriba o en la parte superior
                header.classList.remove("header-hidden");
            }

            lastScroll = currentScroll;
        }

        // Manejar clicks en enlaces del menú móvil
        const navLinks = document.querySelectorAll('.nav-link');
        const navbarCollapse = document.querySelector('.navbar-collapse');
        
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth < 992) {
                    navbarCollapse.classList.remove('show');
                }
            });
        });

        window.addEventListener("scroll", handleScroll);
    });
</script>