<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente Admin SENA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-success mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">Cliente Admin SENA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <div class="navbar-nav">
                    <a class="nav-link" href="{{ route('areas.index') }}">Áreas</a>
                    <a class="nav-link" href="{{ route('trainingcenters.index') }}">Centros</a>
                    <a class="nav-link" href="{{ route('computers.index') }}">Computadores</a>
                    <a class="nav-link" href="{{ route('teachers') }}">Instructores</a>
                    <a class="nav-link" href="{{ route('courses') }}">Cursos</a>
                    <a class="nav-link" href="{{ route('apprentices') }}">Aprendices</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mb-5">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
