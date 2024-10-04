<!-- resources/views/componentes/show.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Componente</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Color de fondo claro */
        }
        h1 {
            color: #004085; /* Azul oscuro */
        }
        .btn-primary {
            background-color: #007bff; /* Azul */
            border-color: #007bff; /* Azul */
        }
        .btn-danger {
            background-color: #ff6600; /* Naranja */
            border-color: #ff6600; /* Naranja */
        }
        .card {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra de la tarjeta */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Detalles del Componente</h1>
        
        <!-- Buscador -->
        <form method="GET" action="{{ route('componentes.index') }}" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Buscar por nombre..." value="{{ request()->get('search') }}">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </div>
            </div>
        </form>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: {{ $componente->id }}</h5>
                <p class="card-text"><strong>Nombre:</strong> {{ $componente->nombre }}</p>
                <p class="card-text"><strong>Máquina Asignada:</strong> {{ $componente->maquina_asignada }}</p>
                <p class="card-text"><strong>Cantidad:</strong> {{ $componente->cantidad }}</p>
                <div class="mt-3">
                    <a href="{{ route('componentes.index') }}" class="btn btn-primary">Volver a la lista</a>
                    <a href="{{ route('componentes.edit', $componente->id) }}" class="btn btn-danger">Editar Componente</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
