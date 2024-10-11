<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Control de Maquinaria</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @import url('http://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display+swap')';'
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

        header ul li{
            display: inline-block;
            color: #333;
            font-weight: 400;
            margin-left: 40px;
            text-decoration: none;
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
    <section>
        <header>
            <!-- Logo en la parte izquierda -->
            <a href="#"><img src="{{ asset('images/LOGO2.png') }}" class="logo"></a>

            <!-- Título y subtítulo centrados -->
            <ul>
                <li><a href="maquinas" class="btn"><i class="fas fa-cogs"></i> Ir a Gestión de Máquinas</a></li>
                <li><a href="operadores" class="btn"><i class="fas fa-users"></i> Ir a Gestión de Operadores</a></li>
                <li><a href="componentes" class="btn"><i class="fas fa-wrench"></i> Ir a Gestión de Componentes</a></li>
            </ul>
        </header>
        <div class="content">
            <div class="textBox">
                <h2>Sistema de Control de Maquinaria<br> YOYO <span>GOD</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, similique. Tempore, corrupti repellendus. Deleniti quia tenetur autem nulla magni, praesentium necessitatibus impedit ipsum modi perferendis.</p>
                <a href="#">Contáctanos</a>
            </div>
            <div class="imgBox">
                <img src="imgMaqui.png" class="Yorsh">
        <footer>
            © 2024 - Sistema de Control de Maquinaria
        </footer>
    </section>
</body>
</html>
