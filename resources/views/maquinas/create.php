<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nueva Máquina</title>
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
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 10px;
            font-size: 16px;
            color: #333;
        }

        input, select {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .btn {
            background-color: #efb810;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 18px;
            text-align: center;
        }

        .btn:hover {
            background-color: #333;
        }

        .back-btn {
            background-color: #333;
            margin-top: 10px;
        }

        .back-btn:hover {
            background-color: #fff;
            color: #333;
        }
    </style>
</head>
<body>

    <header>
        Agregar Nueva Máquina
    </header>

    <div class="container">
        <h2>Formulario de Nueva Máquina</h2>

        <form action="/maquinas" method="POST">
            <!-- Laravel CSRF Protection -->

            <label for="nombre">Nombre de la Máquina</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ej. Excavadora 3000" required>

            <label for="tipo">Modelo de Máquina</label>
            <select id="tipo" name="tipo" required>
                <option value="">Seleccionar modelo</option>
                <option value="Excavadora">Excavadora</option>
                <option value="Cargadora">Cargadora</option>
                <option value="Bulldozer">Bulldozer</option>
                <option value="Grúa">Grúa</option>
                <!-- Agrega más opciones según sea necesario -->
            </select>

            <label for="descripcion">Marca de Máquina</label>
            <input type="text" id="marca" name="marca" placeholder="Ej. Caterpillar" required>

            <label for="descripcion">Serie de Máquina</label>
            <input type="text" id="serie" name="serie" placeholder="Ej. CAT00F32PWGE23 " required>

            <label for="estado">Estado</label>
            <select id="estado" name="estado" required>
                <option value="activa">Activa</option>
                <option value="inactiva">Inactiva</option>
            </select>

            <button type="submit" class="btn"><i class="fas fa-save"></i> Guardar Máquina</button>
        </form>

        <a href="/ControlMaquinaria/public/maquinas" class="btn back-btn"><i class="fas fa-arrow-left"></i> Volver al Listado</a>
    </div>

</body>
</html>
