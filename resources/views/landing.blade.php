<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing - {{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
        .section-team{background:var(--muted);padding:4rem 0;border-top:6px solid var(--gold)}
        .team-card{border-radius:1rem;padding:1.5rem;background:#fff;box-shadow:0 6px 18px rgba(0,0,0,0.06)}
        .team-avatar{width:90px;height:90px;border-radius:50%;object-fit:cover;border:6px solid #fff;box-shadow:0 4px 12px rgba(0,0,0,0.08)}
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

            <div class="row g-4 justify-content-center">
                @foreach($abogados as $abogado)
                <div class="col-md-4">
                    <div class="team-card text-center">
                        <img class="team-avatar mx-auto d-block mb-3" src="{{ $abogado->getFoto() }}" alt="{{ $abogado->getNombre() }}">
                        <h5 class="fw-bold">{{ $abogado->getNombre() }}</h5>
                        <p class="text-muted small">{{ $abogado->getEspecialidad() }}</p>
                        <a href="#" class="btn btn-sm" style="background:var(--green);color:#fff">Leer más</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer class="py-4 text-center">
        <div class="container">&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
