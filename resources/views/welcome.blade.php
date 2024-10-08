<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Control de Maquinaria</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #007bff 40%, #6f42c1);
            color: white;
        }

        header {
            padding: 20px;
            text-align: center;
        }

        header h1 {
            font-size: 48px;
            margin: 0;
            color: #fff;
        }

        header p {
            font-size: 18px;
            margin-top: 10px;
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            text-align: center;
        }

        .content h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 18px;
            line-height: 1.5;
        }

        .btn-container {
            margin-top: 30px;
        }

        .btn {
            background-color: #28a745;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 18px;
            margin: 10px;
        }

        .btn:hover {
            background-color: #218838;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.2);
            position: absolute;
            width: 100%;
            bottom: 0;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Sistema de Control de Maquinaria</h1>
        <p>Gestión eficiente de maquinaria pesada</p>
    </header>

    <div class="content">
        <div>
            <h2>Bienvenido a la Plataforma</h2>
            <p>
                Administra de manera eficiente el estado y la operación de tu maquinaria. <br>
                Este sistema te permite tener un control detallado sobre todas las máquinas en operación, su estado, y sus registros de mantenimiento.
            </p>
            <div class="btn-container">
                <a href="maquinas" class="btn"><i class="fas fa-cogs"></i> Ir a Gestión de Máquinas</a>
                <a href="operadores" class="btn"><i class="fas fa-users"></i> Ir a Gestión de Operadores</a>
                <a href="componentes" class="btn"><i class="fas fa-wrench"></i> Ir a Gestión de Componentes</a>
            </div>
        </div>
    </div>

    <footer>
        © 2024 - Sistema de Control de Maquinaria
    </footer>

</body>
</html>
