<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Máquina</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @import url('http://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #efb810;
            font-weight: bold;
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

        .status-active {
            color: #28a745;
            font-weight: bold;
        }

        .status-inactive {
            color: #dc3545;
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
            background-color: #333;
        }

        .back-btn:hover {
            background-color: #fff;
            color: #333;
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
            <label>Marca:</label>
            <p>{{ $maquina->marca }}</p>

            <label>Modelo de Máquina:</label>
            <p>{{ $maquina->modelo }}</p>

            <label>Serie:</label>
            <p>{{ $maquina->serie }}</p>

            <label>Tipo de tipo_combustible:</label>
            <p>{{ $maquina->tipo_combustible }}</p>

            <label>Precio por Hora:</label>
            <p>{{ $maquina->precio_por_hora }}</p>

            <label>Serie:</label>
            <p>{{ $maquina->serie }}</p>

            <label>Estado:</label>
            <p class="{{ $maquina->estado == 'activa' ? 'status-active' : 'status-inactive' }}">
                {{ ucfirst($maquina->estado) }}
            </p>

            <label>Ubicación Actual:</label>
            <p>{{ $maquina->ubicacion_actual }}</p>

            <label>Horas Usadas:</label>
            <p>{{ $maquina->horas_uso }}</p>

            <label>Operador Encargado:</label>
            <p>{{ $maquina->operador_id }}</p>
        </div>

        <a href="/ControlMaquinaria/public/maquinas" class="btn back-btn"><i class="fas fa-arrow-left"></i> Volver al Listado</a>
    </div>
</body>
</html>
