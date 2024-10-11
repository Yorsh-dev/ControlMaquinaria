<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nuevo Operador</title>
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
        Agregar Nuevo Operador
    </header>

    <div class="container">
        <h2>Formulario de Nuevo Operador</h2>

        <form action="/operadores" method="POST">
            <!-- Laravel CSRF Protection -->

            <label for="id">ID del Operador</label>
            <input type="text" id="id" name="id" placeholder="Ej. OP001" required>

            <label for="nombre">Nombre del Operador</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ej. Juan" required>

            <label for="maquinas_asignadas">Apellido del Operador</label>
            <input type="text" id="apellido" name="apellido" placeholder="Ej. Perez" required>

            <label for="certificaciones">Email del Operador</label>
            <input type="text" id="email" name="email" placeholder="Ej. jperez@gmail.com" required>

            <label for="telefono">Teléfono del Operador</label>
            <input type="tel" id="telefono" name="telefono" placeholder="Ej. 987654321" required pattern="[0-9]{9}">

            <label for="estado">Estado del Operador</label>
            <select id="estado" name="estado" required>
                <option value="operativo">Operativo</option>
                <option value="fuera_servicio">Fuera de servicio</option>
            </select>

            <button type="submit" class="btn"><i class="fas fa-save"></i> Guardar Operador</button>
        </form>

        <a href="/ControlMaquinaria/public/operadores" class="btn back-btn"><i class="fas fa-arrow-left"></i> Volver al Listado</a>
    </div>

</body>
</html>
