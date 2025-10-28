<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing - {{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/all.min.css">
    <style>
        :root{
            --green:#066c57;
            --gold:#c9a76a;
            --muted:#e9f6f2;
        }
        .topbar{
            background:var(--green);
            color:white;
        }
        .topbar a{color:white;text-decoration:none}
        .hero{
            background:linear-gradient(180deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset("images/landing/banner-landing.webp") }}') center/cover no-repeat;
            color: #fff;
            padding: 5rem 0;
        }
        .hero .card-img{
            border-radius:1rem;
            max-width:100%;
            box-shadow:0 6px 20px rgba(0,0,0,0.5);
        }
        .section-team{
            background: linear-gradient(to bottom, var(--muted) 50%, white 50%);
            padding:4rem 0;
            border-top:6px solid var(--gold)
        }
        .section-mision-vision{
            background:linear-gradient(180deg, rgba(0,0,0,0.1), rgba(0,0,0,0.1)), url('{{ asset("images/landing/mision-vision.webp") }}') center/cover no-repeat;
            display: flex;
            min-height: 100vh;
        }
        .secction-footer{
            background: #036554;
        }
        .team-card{border-radius:1rem;padding:1.5rem;background:#fff;box-shadow:0 6px 18px rgba(0,0,0,0.06)}
        .team-avatar{width:150px;border-radius:50%;object-fit:cover;border:6px solid #fff;box-shadow:0 4px 12px rgba(0,0,0,0.08)}
        /* Swiper custom controls */
        .swiper-button-custom{
            width:44px;height:44px;border-radius:50%;background:#ddd;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 12px rgba(0,0,0,0.08);color:#333
        }
        .swiper-button-custom:hover{background:#ccc}

        /* Sección Servicios */
        .section-servicios{
            background: var(--muted);
            padding: 5rem 0;
        }
        .servicio-card{
            background: white;
            border-radius: 1rem;
            padding: 2rem;
            min-height: 200px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.06);
            display: flex;
            flex-direction: column;
            transition: min-height 0.3s ease;
        }
        .servicio-card.expanded{
            min-height: auto;
        }
        .servicio-card h5{
            color: #333;
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }
        .servicio-descripcion{
            flex: 1;
            font-size: 0.95rem;
            line-height: 1.4;
            margin-bottom: 1rem;
            position: relative;
            overflow: hidden;
        }
        .servicio-descripcion.collapsed{
            max-height: 60px;
        }
        .servicio-descripcion.expanded{
            max-height: none;
        }
        .servicio-card p{
            color: #6c757d;
            margin: 0;
        }
        .toggle-descripcion{
            color: var(--green);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            display: inline-block;
            margin-bottom: 1rem;
        }
        .toggle-descripcion:hover{
            text-decoration: underline;
        }
        .leer-mas{
            color: var(--green);
            text-decoration: none;
            font-weight: 600;
        }
        .leer-mas:hover{
            text-decoration: underline;
        }
        .btn-agendar{
            background: var(--green);
            color: white;
            border: none;
            border-radius: 2rem;
            padding: 0.6rem 2.5rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            align-self: flex-start;
        }
        .btn-agendar:hover{
            background: #055446;
            transform: translateY(-2px);
        }


        .image-container {
            flex: 0 0 40%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            position: relative;
        }
        .content-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 4rem;
            gap: 3rem;
        }
         .content-box {
            background: rgba(45, 85, 80, 0.8);
            border-radius: 20px;
            padding: 2.5rem;
            backdrop-filter: blur(10px);
        }

        .content-box h2 {
            color: #d4af77;
            font-size: 3rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .content-box p {
            color: #f5f5f5;
            line-height: 1.8;
            font-size: 1rem;
            margin-bottom: 1.2rem;
        }

        .content-box p:last-child {
            margin-bottom: 0;
        }

             /* Responsive Design */
        @media (max-width: 1024px) {
            .mission-section {
                flex-direction: column;
                background: linear-gradient(to bottom, #1a1410 0%, #1a1410 40%, #2d5550 40%, #2d5550 100%);
            }

            .image-container {
                flex: 0 0 auto;
                min-height: 50vh;
            }

            .content-container {
                padding: 3rem 2rem;
            }

            .content-box h2 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .content-container {
                padding: 2rem 1.5rem;
                gap: 2rem;
            }

            .content-box {
                padding: 2rem;
            }

            .content-box h2 {
                font-size: 2rem;
                margin-bottom: 1rem;
            }

            .content-box p {
                font-size: 0.95rem;
                line-height: 1.7;
            }

            .image-container {
                min-height: 40vh;
                padding: 1.5rem;
            }
        }

        @media (max-width: 480px) {
             .hero{
                background: #01241e;
             }
            .content-container {
                padding: 1.5rem 1rem;
                gap: 1.5rem;
            }

            .content-box {
                padding: 1.5rem;
                border-radius: 15px;
            }

            .content-box h2 {
                font-size: 1.75rem;
                letter-spacing: 1px;
            }

            .content-box p {
                font-size: 0.9rem;
                line-height: 1.6;
            }

            .image-container {
                min-height: 35vh;
                padding: 1rem;
            }
            .hero .card-img{
                border-radius: 0;
                max-width:100%;
                box-shadow: none;
            }
        }

        .footer {
            background: #036554;
            padding: 40px 40px 30px;
            margin-top: auto;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo-icon {
            display: flex;
            gap: 3px;
        }

        .line {
            width: 4px;
            height: 35px;
            background-color: white;
            transform: skewX(-20deg);
        }

        .logo-text {
            color: white;
            font-size: 28px;
            font-weight: bold;
            letter-spacing: 8px;
        }

        .logo-subtitle {
            color: white;
            font-size: 11px;
            letter-spacing: 4px;
            margin-top: -5px;
        }

        .divider {
            width: 100%;
            height: 1px;
            background-color: rgba(255, 255, 255, 0.3);
            margin-bottom: 30px;
        }

        .contact-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
            flex-wrap: wrap;
            padding: 0 20px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 12px;
            color: white;
            text-decoration: none;
            font-size: 14px;
            transition: opacity 0.3s, transform 0.3s;
        }

        .contact-item:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        .icon {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            flex-shrink: 0;
        }

        .social-links {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .social-item {
            color: white;
            text-decoration: none;
            transition: transform 0.3s, opacity 0.3s;
        }

        .social-item:hover {
            transform: scale(1.15);
            opacity: 0.9;
        }

        .social-icon {
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .system-info {
            display: flex;
            flex-direction: column;
            gap: 2px;
            color: white;
            font-size: 12px;
            line-height: 1.4;
        }

        .siguenos-text {
            color: white;
            font-size: 14px;
            font-weight: 500;
        }

        @media (max-width: 1200px) {
            .contact-bar {
                gap: 30px;
            }
        }

        @media (max-width: 768px) {
            .footer {
                padding: 30px 20px 20px;
            }

            .contact-bar {
                gap: 25px;
                flex-direction: column;
            }

            .contact-item {
                width: 100%;
                max-width: 350px;
            }
            
            .logo-text {
                font-size: 24px;
                letter-spacing: 6px;
            }

            .social-links {
                justify-content: center;
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .logo-text {
                font-size: 20px;
                letter-spacing: 4px;
            }

            .line {
                width: 3px;
                height: 28px;
            }

            .contact-item span {
                font-size: 13px;
            }
        }
    </style>
</head>
<body>

    <header class="topbar">
        <div class="container d-flex align-items-center justify-content-between py-3">
            <div class="d-flex align-items-center">
                <div class="me-5" style="font-weight:700;letter-spacing:1px;">
                        <img src="{{ asset('images/landing/logo.png') }}" alt="logo" style="height:40px;vertical-align:middle;" />
                </div>
                <nav class="d-none d-md-block">
                    <a class="me-3" href="#team">Equipo</a>
                    <a class="me-3" href="#mision_vision">Misión y valores</a>
                    <a class="me-3" href="#servicios">Servicios</a>
                    <a class="me-3" href="#comentarios">Comentarios</a>
                    <a class="me-3" href="#faq">FAQ</a>
                    <a class="me-3" href="#ubicacion">Ubicación</a>
                </nav>
            </div>
            <div>
                <a class="btn btn-outline-light btn-sm" href="#">Registrarse</a>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-start">
                    <h1 class="display-4 fw-bold" style="color: #C8AE80">{{ $nombreEmpresa }}</h1>
                    <p class="lead text-white-50">{{ $descripcion }}</p>
                </div>
                <div class="col-lg-6 text-end">
                        <img class="card-img" src="{{ asset('images/landing/hero-right.webp') }}" alt="justicia">
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="section-team">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold">{{ $equipoTitle }}</h2>
                <p class="text-muted">{{ $equipoDesc }}</p>
            </div>

            <div>
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach($abogados as $abogado)
                        <div class="swiper-slide">
                            <div class="team-card text-center mx-2">
                                <img class="team-avatar mx-auto d-block mb-3" src="{{ asset($abogado->getFoto()) }}" alt="{{ $abogado->getNombre() }}">
                                <h5 class="fw-bold">{{ $abogado->getNombre() }}</h5>
                                <p class="text-muted small">{{ $abogado->getEspecialidad() }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Pagination -->
                    <div class="swiper-pagination mt-3"></div>
                    <!-- Custom Navigation -->
                    <div class="swiper-button-prev swiper-button-custom" aria-label="Anterior"></div>
                    <div class="swiper-button-next swiper-button-custom" aria-label="Siguiente"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="mision_vision" class="section-mision-vision">
        <div class="image-container">
        </div>
        <div class="content-container">
            <div class="content-box">
                <h2>Mision</h2>
                <p>{{ $mision }}</p>

                <br/><br/>

                <h2>Valores</h2>
                <p>{{ $vision }}</p>
            </div>
        </div>
    </section>

    <section id="servicios" class="section-servicios">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Servicios <span style="color: var(--green)">jurídicos</span></h2>
                <p class="text-muted">Ofrecemos una amplia gama de servicios jurídicos adaptados a las necesidades de nuestros clientes.</p>
            </div>

            <div>
                <!-- Swiper Servicios -->
                <div class="swiper serviciosSwiper">
                    <div class="swiper-wrapper">
                        @foreach($serviciosJuridicos as $servicioJuridico)
                        <div class="swiper-slide">
                            <div class="servicio-card mx-2">
                                <h5 class="fw-bold">{{ $servicioJuridico->getNombre() }}</h5>
                                <div class="servicio-descripcion collapsed">
                                {!! $servicioJuridico->getDescripcion() !!}
                                </div>
                                <a class="toggle-descripcion" onclick="toggleDescripcion(this)">Leer más</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Pagination -->
                    <div class="swiper-pagination mt-3"></div>
                    <!-- Custom Navigation -->
                    <div class="swiper-button-prev swiper-button-custom" aria-label="Anterior"></div>
                    <div class="swiper-button-next swiper-button-custom" aria-label="Siguiente"></div>
                </div>
            </div>
        </div>
    </section>
 
    <footer class="footer">
        <div class="logo-container">
            <div class="logo">
                <img src="{{ asset('images/landing/logo.png') }}" alt="logo" style="vertical-align:middle;" />
            </div>
        </div>

        <div class="divider"></div>

        <nav class="contact-bar">
            <a href="mailto:despachojuridico@gmail.com" class="contact-item">
                <i class="fa fa-thin fa fa-envelope"></i>
                <span>despachojuridico@gmail.com</span>
            </a>

            <a href="tel:12305-6529" class="contact-item">
                <i class="fa fa-thin fa fa-phone"></i>
                <span>12305-6529</span>
            </a>

            <a href="https://wa.me/1230565299" class="contact-item" target="_blank">
                <i class="fa fa-brands fa fa-whatsapp"></i>
                <span>12305-6529</span>
            </a>

            <div class="contact-item">
                <i class="fa fa-thin fa fa-map-location-dot"></i>
                <div class="system-info">
                    <span>Opera/8.69 [X11; Linux i686; sl-SI]</span>
                    <span>Presto/2.10.204 Version/12.00</span>
                </div>
            </div>

            <div class="siguenos-text">
                Síguenos
            </div>

            <div class="social-links">
                <a href="#" class="social-item" aria-label="Instagram" target="_blank">
                    <i class="fa fa-brands fa fa-instagram"></i>
                </a>
                <a href="#" class="social-item" aria-label="Twitter" target="_blank">
                    <i class="fa fa-brands fa fa-twitter"></i>
                </a>
                <a href="#" class="social-item" aria-label="Facebook" target="_blank">
                    <i class="fa fa-brands fa fa-facebook-f"></i>
                </a>
                <a href="#" class="social-item" aria-label="YouTube" target="_blank">
                    <i class="fa fa-brands fa fa-youtube"></i>
                </a>
            </div>
        </nav>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        // Swiper para equipo
        const swiper = new Swiper('.mySwiper', {
            loop: true,
            spaceBetween: 24,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                0: { slidesPerView: 1 },
                768: { slidesPerView: 3 }
            }
        });

        // Swiper para servicios jurídicos
        const serviciosSwiper = new Swiper('.serviciosSwiper', {
            loop: true,
            spaceBetween: 24,
            pagination: {
                el: '.serviciosSwiper .swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.serviciosSwiper .swiper-button-next',
                prevEl: '.serviciosSwiper .swiper-button-prev',
            },
            breakpoints: {
                0: { slidesPerView: 1 },
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 3 }
            }
        });

        // Función para expandir/contraer descripción de servicios
        function toggleDescripcion(element) {
            const card = element.closest('.servicio-card');
            const descripcion = card.querySelector('.servicio-descripcion');
            
            if (descripcion.classList.contains('collapsed')) {
                descripcion.classList.remove('collapsed');
                descripcion.classList.add('expanded');
                card.classList.add('expanded');
                element.textContent = 'Leer menos';
            } else {
                descripcion.classList.remove('expanded');
                descripcion.classList.add('collapsed');
                card.classList.remove('expanded');
                element.textContent = 'Leer más';
            }
        }
    </script>
</body>
</html>
