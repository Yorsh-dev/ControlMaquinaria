<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Control de Maquinaria</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Asegurar que el margen y padding sean cero para todos los elementos */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            color: white;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        /* Fondo difuminado */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://static.vecteezy.com/system/resources/previews/008/922/022/non_2x/gradient-black-background-with-angle-shapes-texture-illustration-vector.jpg') no-repeat center center fixed;
            background-size: cover;
            filter: blur(1px); /* Difumina solo el fondo */
            z-index: -1; /* Coloca el fondo detrás del contenido */
        }

        /* Encabezado */
        header {
            background-color: rgba(0, 0, 0, 0.8); /* Fondo semitransparente */
            padding: 20px;
            width: 100%;
            text-align: center;
        }

        header img {
            width: 150px; /* Ajusta el tamaño del logo */
            height: auto;
        }

        header h1 {
            font-size: 48px;
            margin: 0;
            color: #fff;
        }

        header p {
            font-size: 18px;
            margin-top: 10px;
            color: #fff;
        }

        /* Contenido */
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex: 1;
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

        /* Botones con el color #E0E0D1 */
        .btn {
            background-color: #E0E0D1;
            color: black;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 18px;
            margin: 10px;
        }

        .btn:hover {
            background-color: #d6d6c2;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.2);
            color: #fff;
            font-size: 14px;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <!-- Logo en la parte izquierda -->
        <img src="{{ asset('images/LOGO2.png') }}" alt="Logo de la empresa">


        <!-- Título y subtítulo centrados -->
        <div>
            <h1>Sistema de Control de Maquinaria</h1>
            <p>Gestión eficiente de maquinaria pesada</p>
        </div>
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
