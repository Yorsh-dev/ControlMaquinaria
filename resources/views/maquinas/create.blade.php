<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nueva Máquina</title>
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

        <form action="{{ route('maquinas.store') }}" method="POST">
            @csrf
            <label for="nombre">Nombre de la Máquina</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ej. Excavadora 3000" required>
        
            <label for="marca">Marca de Máquina</label>
            <input type="text" id="marca" name="marca" placeholder="Ej. Caterpillar" required>
        
            <label for="modelo">Modelo de Máquina</label>
            <input type="text" id="modelo" name="modelo" placeholder="Ej. 3000" required>
        
            <label for="serie">Serie de Máquina</label>
            <input type="text" id="serie" name="serie" placeholder="Ej. CAT00F32PWGE23" required>
        
            <label for="tipo_combustible">Tipo de Combustible</label>
            <input type="text" id="tipo_combustible" name="tipo_combustible" placeholder="Ej. Diesel" required>

        
            <label for="precio_por_hora">Precio por Hora</label>
            <input type="number" id="precio_por_hora" name="precio_por_hora" step="0.01" placeholder="Ej. 50.00" required>
        
            <label for="estado">Estado</label>
            <select id="estado" name="estado" required>
                <option value="operativa">Operativa</option>
                <option value="mantenimiento">Mantenimiento</option>
                <option value="fuera_servicio">Fuera de Servicio</option>
            </select>
        
            <label for="ubicacion_actual">Ubicación Actual</label>
            <input type="text" id="ubicacion_actual" name="ubicacion_actual" placeholder="Ej. Taller 1" required>
        
            <label for="horas_uso">Horas Usadas</label>
            <input type="number" id="horas_uso" name="horas_uso" placeholder="Ej. 100" required>
        
            <label for="operador_id">Operador Encargado (ID)</label>
            <input type="number" id="operador_id" name="operador_id" placeholder="Ej. 1" required>
        
            <button type="submit" class="btn"><i class="fas fa-save"></i> Guardar Máquina</button>
        </form>
        <br>    
        <a href="/ControlMaquinaria/public/maquinas" class="btn back-btn"><i class="fas fa-arrow-left"></i> Volver al Listado</a>
    </div>

</body>
</html>
