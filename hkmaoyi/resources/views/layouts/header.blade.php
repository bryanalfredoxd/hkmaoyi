<style>
    /* Estilos para el header */
    .header-fixed {
        transition: opacity 0.5s ease-in-out;
    }

    .header-hidden {
        opacity: 0;
        pointer-events: none;
    }

    .header-visible {
        opacity: 1;
        pointer-events: auto;
    }
</style>

<header style="margin-bottom: 154px;">
<div class="fixed-top header-fixed" style="background-color: white; z-index: 1000;">
    <!-- Header Top Bar -->
    <div class="header-top-bar" style="background: #005151;">
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

    <!-- Navbar -->
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
        let isScrolling = false;
        let hideTimeout = null;

        function handleScroll() {
            if (window.scrollY > 50) {
                header.classList.add("header-hidden");
                isScrolling = true;
            } else {
                header.classList.remove("header-hidden");
                isScrolling = false;
            }
        }

        function handleMouseMove(event) {
            if (isScrolling && event.clientY < 100) {
                header.classList.remove("header-hidden");
                header.classList.add("header-visible");

                if (hideTimeout) {
                    clearTimeout(hideTimeout);
                }

                hideTimeout = setTimeout(() => {
                    header.classList.add("header-hidden");
                }, 2000);
            }
        }

        function handleMouseLeave() {
            if (isScrolling) {
                header.classList.add("header-hidden");
            }
        }

        window.addEventListener("scroll", handleScroll);
        window.addEventListener("mousemove", handleMouseMove);
        window.addEventListener("mouseleave", handleMouseLeave);
    });
</script>