<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing - {{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
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
        .team-card{border-radius:1rem;padding:1.5rem;background:#fff;box-shadow:0 6px 18px rgba(0,0,0,0.06)}
        .team-avatar{width:90px;height:90px;border-radius:50%;object-fit:cover;border:6px solid #fff;box-shadow:0 4px 12px rgba(0,0,0,0.08)}
        /* Swiper custom controls */
        .swiper-button-custom{
            width:44px;height:44px;border-radius:50%;background:#ddd;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 12px rgba(0,0,0,0.08);color:#333
        }
        .swiper-button-custom:hover{background:#ccc}


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
                    <a class="me-3" href="#">Equipo</a>
                    <a class="me-3" href="#">Misión y valores</a>
                    <a class="me-3" href="#">Servicios</a>
                    <a class="me-3" href="#">Comentarios</a>
                    <a class="me-3" href="#">FAQ</a>
                    <a class="me-3" href="#">Ubicación</a>
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

    <section id="equipo" class="section-team">
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
                                <img class="team-avatar mx-auto d-block mb-3" src="{{ $abogado->getFoto() }}" alt="{{ $abogado->getNombre() }}">
                                <h5 class="fw-bold">{{ $abogado->getNombre() }}</h5>
                                <p class="text-muted small">{{ $abogado->getEspecialidad() }}</p>
                                <a href="#" class="btn btn-sm" style="background:var(--green);color:#fff">Leer más</a>
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

    <footer class="py-4 text-center">
        <div class="container">&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
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
    </script>
</body>
</html>
