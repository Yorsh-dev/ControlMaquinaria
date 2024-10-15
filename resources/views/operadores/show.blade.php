<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Operador</title>
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
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .details {
            margin-top: 20px;
            border-top: 2px solid #efb810;
            padding-top: 20px;
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
            padding: 8px;
            border-left: 4px solid #efb810;
            background-color: #f9f9f9;
            border-radius: 4px;
        }

        .status-operativo {
            color: #28a745; /* Verde */
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
            transition: background-color 0.3s;
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
        Detalles del Operador
    </header>

    <div class="container">
        <h2>{{ $operador->nombre }} {{ $operador->apellido }}</h2>

        <div class="details">
            <label>ID:</label>
            <p>{{ $operador->id }}</p>

            <label>Nombre Completo:</label>
            <p>{{ $operador->nombre }} {{ $operador->apellido }}</p>

            <label>Email:</label>
            <p>{{ $operador->email }}</p>

            <label>Teléfono:</label>
            <p>{{ $operador->telefono ?? 'No especificado' }}</p>

            <label>Estado:</label>
            <p class="{{ $operador->estado == 'operativo' ? 'status-operativo' : 'status-fuera' }}">
                {{ ucfirst($operador->estado) }}
            </p>

            <label>Fecha de Creación:</label>
            <p>{{ $operador->created_at->format('d/m/Y') }}</p>

            <label>Última Actualización:</label>
            <p>{{ $operador->updated_at->format('d/m/Y') }}</p>
        </div>

        <a href="{{ url('operadores') }}" class="btn back-btn"><i class="fas fa-arrow-left"></i> Volver al Listado</a>
    </div>
</body>
</html>
