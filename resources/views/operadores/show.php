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
            background-color: #efb810;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .search-form button:hover {
            background-color: #333;
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
            background-color: #333;
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
        <div class="search-form">
            <form action="operadores/buscar" method="GET">
                <input type="text" name="id" placeholder="Buscar por ID del Operador" required>
                <button type="submit"><i class="fas fa-search"></i> Buscar</button>
            </form>
        </div>

            <h2>{{ $operador->nombre }}</h2>

            <div class="details">
                <label>Apellido:</label>
                <p>{{ $operador->apellido }}</p> <!-- Asumiendo que es un array -->

                <label>Email:</label>
                <p>{{ $operador->email }}</p> <!-- Asumiendo que es un array -->

                <label>Teléfono:</label>
                <p>{{ $operador->telefono }}</p>

                <label>Estado:</label>
                <p class="{{ $operador->estado == 'activa' ? 'status-active' : 'status-inactive' }}">
                    {{ ucfirst($maquina->estado) }}
                </p>
            </div>

        <a href="/ControlMaquinaria/public/operadores" class="btn back-btn"><i class="fas fa-arrow-left"></i> Volver al Listado</a>
    </div>
</body>
</html>
