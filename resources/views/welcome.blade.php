<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Control de Maquinaria</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @import url('http://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
        /* Asegurar que el margen y padding sean cero para todos los elementos */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        section {
            position: relative;
            width: 100%;
            min-height: 100vh;
            padding: 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #fff;
        }

        header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo {
            position: absolute;
            max-width: 80px;
        }

        header ul {
            position: relative;
            display: flex;
        }

        header ul li{
            list-style: none;
        }

        header ul li a{
            display: inline-block;
            color: #333;
            font-weight: 400;
            margin-left: 40px;
            text-decoration: none;
        }

        .content
        {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .content .textBox
        {
            position: relative;
            max-width: 600px;
        }

        .content .textBox h2
        {
            color: #333;
            font-size: 4em;
            line-height: 1.4em;
            font-weight: 500;
        }

        .content .textBox h2 span
        {
            color: #efb810;
            font-size: 1.2em;
            font-weight: 900;
        }

        .content .textBox p
        {
            color: #333;
        }

        .content .textBox a
        {
            display: inline-block;
            margin-top: 20px;
            padding: 8px 20px;
            background: #efb810;
            color: #fff;
            border-radius: 40px;
            font-weight: 500;
            letter-spacing: 1px;
            text-decoration: none;
        }

        .content .imgBox
        {
            width: 600px;
            display: flex;
            justify-content: flex-start;
            padding-right: 800px;
            margin-top: 50px;
        }

        .content .imgBox img
        {
            max-width: 1200px;
        }

        /*
        .sectors
        {
            position: absolute;
            left: 50%;
            bottom: 20px;
            transform: translateX(-50%);
            display: flex;
            max-width: 30px;
        }

        .sectors li
        {
            list-style: none;
            display: inline-block;
            margin-bottom: 0 20px;
            cursor: pointer;
            max-width: 3px;
        }

        /* Footer */
        /*
        footer {
            text-align: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.2);
            color: #fff;
            font-size: 14px;
            width: 100%;
        }
        */
    </style>
</head>
<body>
    <section>
        <header>
            <!-- Logo en la parte izquierda -->
            <a href="#"><img src="{{ asset('images/LOGO2.png') }}" class="logo"></a>

            <!-- Título y subtítulo centrados -->
            <ul>
                <li><a href="maquinas" class="btn">Ir a Gestión de Máquinas</a></li>
                <li><a href="operadores" class="btn">Ir a Gestión de Operadores</a></li>
                <li><a href="componentes" class="btn">Ir a Gestión de Componentes</a></li>
            </ul>
        </header>
        <div class="content">
            <div class="textBox">
                <h2>Sistema de Control de Maquinaria<br> YOYO <span>GOD</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, similique. Tempore, corrupti repellendus. Deleniti quia tenetur autem nulla magni, praesentium necessitatibus impedit ipsum modi perferendis.</p>
                <a href="#">Contáctanos</a>
            </div>
            <div class="imgBox">
                <img src="{{ asset('images/imgPri.png') }}" class="Yorsh">
            </div>
        </div>
        <!--
        <ul class="sectors">
            <li><img src="{{ asset('images/imgEsc.png') }}"></li>
            <li><img src="{{ asset('images/imgRod.png') }}"></li>
            <li><img src="{{ asset('images/imgCam.png') }}"></li>
        </ul>
        <footer>
            © 2024 - Sistema de Control de Maquinaria
        </footer>
        -->
    </section>
</body>
</html>
