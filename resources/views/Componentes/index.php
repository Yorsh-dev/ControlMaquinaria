<!-- resources/views/componentes/index.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Componentes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f7f9; /* Fondo claro */
            font-family: 'Arial', sans-serif;
        }

        h1 {
            color: #007bff; /* Azul oscuro */
            margin-top: 20px;
        }

        .btn-success {
            background-color: #28a745; /* Verde */
            border-color: #28a745; /* Verde */
        }

        .btn-secondary {
            background-color: #007bff; /* Azul */
            border-color: #007bff; /* Azul */
        }

        .btn-danger {
            background-color: #dc3545; /* Rojo */
            border-color: #dc3545; /* Rojo */
        }

        .card {
            border: none; /* Sin borde para un aspecto más limpio */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra de la tarjeta */
        }

        .container {
            max-width: 1000px;
            margin-top: 20px;
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .btn-secondary, .btn-success, .btn-danger {
            margin-top: 10px;
        }

        .btn-back {
            margin-top: 15px;
        }

        .thead-dark {
            background-color: #343a40; /* Color de fondo para el encabezado */
            color: white; /* Color de texto para el encabezado */
        }

        /* Estilo de tabla para mayor claridad */
        .table {
            background-color: white; /* Fondo blanco para la tabla */
            border-radius: 8px; /* Bordes redondeados */
            overflow: hidden; /* Para redondear esquinas */
        }

        /* Efecto hover para filas de tabla */
        .table tr:hover {
            background-color: #f1f1f1; /* Color de fondo al pasar el mouse */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Listado de Componentes</h1>

        <!-- Tabla de Componentes -->
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Máquina Asignada</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se deben mostrar los componentes -->
                @foreach($componentes as $componente)
                    <tr>
                        <td>{{ $componente->id }}</td>
                        <td>{{ $componente->nombre }}</td>
                        <td>{{ $componente->maquina_asignada }}</td>
                        <td>{{ $componente->cantidad }}</td>
                        <td>
                            <!-- Botones de acción -->
                            <a href="{{ route('componentes.show', $componente->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('componentes.edit', $componente->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('componentes.destroy', $componente->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este componente?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Botón para agregar nuevos componentes -->
        <a href="componentes/create" class="btn btn-success">
            <i class="fas fa-plus"></i> Añadir Nuevo Componente
        </a>

        <!-- Botón para volver al inicio -->
        <a href="/ControlMaquinaria/public" class="btn btn-secondary btn-back">Volver al Inicio</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>