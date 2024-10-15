<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nuevo Componente</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');

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

        input, select, textarea {
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
        Agregar Nuevo Componente
    </header>

    <div class="container">
        <h2>Formulario de Nuevo Componente</h2>

        <form action="{{ route('componentes.store') }}" method="POST">
            @csrf
            <label for="nombre">Nombre del Componente</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ej. Motor principal" required>

            <label for="tiempo_de_vida">Tiempo de Vida (horas/días)</label>
            <input type="number" id="tiempo_de_vida" name="tiempo_de_vida" placeholder="Ej. 500" required>

            <label for="estado">Estado</label>
            <select id="estado" name="estado" required>
                <option value="funcionando">Funcionando</option>
                <option value="mantenimiento">Mantenimiento</option>
                <option value="fuera_de_servicio">Fuera de Servicio</option>
            </select>

            <label for="maquinaria_id">Máquina Asignada</label>
            <select id="maquinaria_id" name="maquinaria_id" required>
                <!-- Aquí puedes llenar el select con las máquinas disponibles -->
                <option value="">Seleccione una máquina</option>
                <option value="1">Máquina 1</option>
                <option value="2">Máquina 2</option>
            </select>

            <label for="fecha_instalacion">Fecha de Instalación</label>
            <input type="date" id="fecha_instalacion" name="fecha_instalacion" required>

            <label for="observaciones">Observaciones</label>
            <textarea id="observaciones" name="observaciones" placeholder="Detalles adicionales" rows="4"></textarea>

            <button type="submit" class="btn"><i class="fas fa-save"></i> Guardar Componente</button>
        </form>
        <br>    
        <a href="/ControlMaquinaria/public/componentes" class="btn back-btn"><i class="fas fa-arrow-left"></i> Volver al Listado</a>
    </div>

</body>
</html>
