<!-- resources/views/componentes/index.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Componentes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Color de fondo claro */
        }
        h1 {
            color: #004085; /* Azul oscuro */
        }
        .btn-success {
            background-color: #ff6600; /* Naranja */
            border-color: #ff6600; /* Naranja */
        }
        .btn-info {
            background-color: #007bff; /* Azul */
            border-color: #007bff; /* Azul */
        }
        .table thead th {
            background-color: #ff6600; /* Naranja */
            color: white; /* Texto blanco */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Gestión de Componentes</h1>
        <div class="mb-3">
            <a href="{{ route('componentes.create') }}" class="btn btn-success">Agregar Componente</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Máquina Asignada</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($componentes as $componente)
                <tr>
                    <td>{{ $componente->id }}</td>
                    <td>{{ $componente->nombre }}</td>
                    <td>{{ $componente->maquina_asignada }}</td>
                    <td>{{ $componente->cantidad }}</td>
                    <td>
                        <a href="{{ route('componentes.show', $componente->id) }}" class="btn btn-info">Ver</a>
                        <!-- Aquí puedes agregar opciones para editar o eliminar el componente -->
                        <a href="{{ route('componentes.edit', $componente->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('componentes.destroy', $componente->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
