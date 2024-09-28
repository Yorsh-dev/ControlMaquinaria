<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Operador</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f9;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            text-align: center;
        }

        .search-form {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .search-form input {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
            margin-right: 10px;
            width: 60%;
        }

        .search-form button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .search-form button:hover {
            background-color: #0056b3;
        }

        .details {
            margin-top: 20px;
        }

        .details label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
            color: #555;
        }

        .details p {
            font-size: 18px;
            margin: 5px 0;
            color: #333;
        }

        .btn {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }

        .btn i {
            margin-right: 5px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .back-btn {
            background-color: #6c757d;
        }

        .back-btn:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <header>
        Detalles del Operador
    </header>

    <div class="container">
        <div class="search-form">
            <form action="/operadores/buscar" method="GET">
                <input type="text" name="id" placeholder="Buscar por ID del Operador" required>
                <button type="submit"><i class="fas fa-search"></i> Buscar</button>
            </form>
        </div>

        @if(isset($operador))
            <h2>{{ $operador->nombre }}</h2>

            <div class="details">
                <label>ID del Operador:</label>
                <p>{{ $operador->id }}</p>

                <label>Máquinas Asignadas:</label>
                <p>{{ implode(', ', $operador->maquinas_asignadas) }}</p> <!-- Asumiendo que es un array -->

                <label>Certificaciones:</label>
                <p>{{ implode(', ', $operador->certificaciones) }}</p> <!-- Asumiendo que es un array -->

                <label>Última Asignación:</label>
                <p>{{ $operador->ultima_asignacion }}</p>
            </div>
        @else
            <h2>No se encontraron resultados.</h2>
        @endif

        <a href="/operadores" class="btn back-btn"><i class="fas fa-arrow-left"></i> Volver al Listado</a>
    </div>
</body>
</html>
