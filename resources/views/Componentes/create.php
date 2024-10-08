
<!-- resources/views/componentes/create.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Componente</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f7f9; /* Fondo claro */
            font-family: 'Arial', sans-serif;
        }

        h1 {
            color: #007bff; /* Azul oscuro */
        }

        .btn-success {
            background-color: #28a745; /* Verde */
            border-color: #28a745; /* Verde */
        }

        .btn-secondary {
            background-color: #007bff; /* Azul */
            border-color: #007bff; /* Azul */
        }

        .form-control:focus {
            border-color: #28a745; /* Verde */
            box-shadow: 0 0 5px rgba(40, 167, 69, 0.5); /* Sombra de foco verde */
        }

        .card {
            border: none; /* Sin borde para un aspecto más limpio */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra de la tarjeta */
        }

        .form-group label {
            font-weight: bold;
        }

        .container {
            max-width: 800px;
            margin-top: 20px;
        }

        .btn-secondary, .btn-success, .btn-back {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Agregar Componente</h1>
        <form action="{{ route('componentes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" name="id" id="id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="maquina_asignada">Máquina Asignada</label>
                <select name="maquina_asignada" id="maquina_asignada" class="form-control" required>
                    <option value="">Seleccione una máquina</option>
                    <option value="maquina1">Máquina 1</option>
                    <option value="maquina2">Máquina 2</option>
                    <option value="maquina3">Máquina 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="number" name="cantidad" id="cantidad" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Crear Componente</button>
            <!-- Botón de retroceso -->
            <button type="button" class="btn btn-secondary btn-back" onclick="window.history.back();">Volver</button>
            <a href="{componentes/show}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
