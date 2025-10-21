<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing - {{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>
        </div>
    </nav>

    <main class="py-5">
        <div class="container text-center">
            <h1 class="display-4">Bienvenido a la Landing</h1>
            <p class="lead">Esta es la página inicial del proyecto.</p>
            <p>Laravel {{ Illuminate\Foundation\Application::VERSION }}</p>
        </div>
    </main>

    <footer class="text-center py-4">
        <div class="container">&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
