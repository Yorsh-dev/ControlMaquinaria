<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Máquina</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f9;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
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
        }

        .status-operativa {
            color: #28a745; /* Verde */
            font-weight: bold;
        }

        .status-mantenimiento {
            color: #fd7e14; /* Naranja */
            font-weight: bold;
        }

        .status-fuera {
            color: #dc3545; /* Rojo */
            font-weight: bold;
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
        Detalles de la Máquina
    </header>

    <div class="container">
        <h2>{{ $maquina->nombre }}</h2>

        <div class="details">
            <label>ID:</label>
            <p>{{ $maquina->id }}</p>

            <label>Marca:</label>
            <p>{{ $maquina->marca }}</p>

            <label>Modelo:</label>
            <p>{{ $maquina->modelo }}</p>

            <label>Número de Serie:</label>
            <p>{{ $maquina->serie }}</p>

            <label>Tipo de Combustible:</label>
            <p>{{ $maquina->tipo_combustible }}</p>

            <label>Precio por Hora:</label>
            <p>S/. {{ number_format($maquina->precio_por_hora, 2) }}</p>

            <label>Estado:</label>
            <p class="{{ $maquina->estado == 'operativa' ? 'status-operativa' : ($maquina->estado == 'mantenimiento' ? 'status-mantenimiento' : 'status-fuera') }}">
                {{ ucfirst($maquina->estado) }}
            </p>

            <label>Ubicación Actual:</label>
            <p>{{ $maquina->ubicacion_actual ?? 'No especificada' }}</p>

            <label>Horas de Uso:</label>
            <p>{{ $maquina->horas_uso ?? 'No especificadas' }}</p>

            <label>ID del Operador:</label>
            <p>{{ $maquina->operador_id ?? 'Sin asignar' }}</p>
        </div>

        <a href="/ControlMaquinaria/public/maquinas" class="btn back-btn"><i class="fas fa-arrow-left"></i> Volver al Listado</a>
    </div>
</body>
</html>
