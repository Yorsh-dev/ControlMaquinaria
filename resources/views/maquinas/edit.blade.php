<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Máquina - Control de Maquinaria</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @import url('http://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
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
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }

        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }

        .btn-back {
            background-color: #5e6266;
            margin-top: 20px;
            text-align: center;
            display: block;
        }

        .btn-back:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
    <header>
        Editar Máquina
    </header>

    <div class="container">
        <h2>Modificar Datos de la Máquina</h2>

        <form action="{{ route('maquinas.update', $maquinaria->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nombre">Nombre de la Máquina</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $maquinaria->nombre) }}" required>

            <label for="marca">Marca de Máquina</label>
            <input type="text" id="marca" name="marca" value="{{ old('marca', $maquinaria->marca) }}" required>

            <label for="modelo">Modelo de Máquina</label>
            <input type="text" id="modelo" name="modelo" value="{{ old('modelo', $maquinaria->modelo) }}" required>

            <label for="serie">Serie de Máquina</label>
            <input type="text" id="serie" name="serie" value="{{ old('serie', $maquinaria->serie) }}" required>

            <label for="tipo_combustible">Tipo de Combustible</label>
            <input type="text" id="tipo_combustible" name="tipo_combustible" value="{{ old('tipo_combustible', $maquinaria->tipo_combustible) }}" required>

            <label for="precio_por_hora">Precio por Hora</label>
            <input type="text" id="precio_por_hora" name="precio_por_hora" value="{{ old('precio_por_hora', $maquinaria->precio_por_hora) }}" required>

            <label for="ubicacion_actual">Ubicación Actual</label>
            <input type="text" id="ubicacion_actual" name="ubicacion_actual" value="{{ old('ubicacion_actual', $maquinaria->ubicacion_actual) }}" required>

            <label for="horas_uso">Horas de Uso</label>
            <input type="text" id="horas_uso" name="horas_uso" value="{{ old('horas_uso', $maquinaria->horas_uso) }}" required>

            <label for="operador_id">ID del Operador</label>
            <input type="text" id="operador_id" name="operador_id" value="{{ old('operador_id', $maquinaria->operador_id) }}" required>

            <label for="estado">Estado</label>
            <select id="estado" name="estado" required>
                <option value="operativa" {{ $maquinaria->estado == 'operativa' ? 'selected' : '' }}>Operativa</option>
                <option value="mantenimiento" {{ $maquinaria->estado == 'mantenimiento' ? 'selected' : '' }}>Mantenimiento</option>
                <option value="fuera_servicio" {{ $maquinaria->estado == 'fuera_servicio' ? 'selected' : '' }}>Fuera de Servicio</option>
            </select>

            <button type="submit">Actualizar Máquina</button>
        </form>

        <a href="{{ url('maquinas') }}" class="btn-back"><i class="fas fa-arrow-left"></i> Volver al Listado</a>
    </div>
</body>
</html>
