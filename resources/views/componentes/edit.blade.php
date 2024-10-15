<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Componente - Control de Maquinaria</title>
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

        input[type="text"], select, textarea, input[type="date"] {
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
        Editar Componente
    </header>

    <div class="container">
        <h2>Modificar Datos del Componente</h2>

        <form action="{{ route('componentes.update', $componente->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nombre">Nombre del Componente</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $componente->nombre) }}" required>

            <label for="tiempo_de_vida">Tiempo de Vida (en horas)</label>
            <input type="text" id="tiempo_de_vida" name="tiempo_de_vida" value="{{ old('tiempo_de_vida', $componente->tiempo_de_vida) }}" required>

            <label for="fecha_instalacion">Fecha de Instalación</label>
            <input type="date" id="fecha_instalacion" name="fecha_instalacion" value="{{ old('fecha_instalacion', $componente->fecha_instalacion) }}" required>

            <label for="estado">Estado</label>
            <select id="estado" name="estado" required>
                <option value="funcionando" {{ $componente->estado == 'funcionando' ? 'selected' : '' }}>Funcionando</option>
                <option value="mantenimiento" {{ $componente->estado == 'mantenimiento' ? 'selected' : '' }}>Mantenimiento</option>
                <option value="fuera_de_servicio" {{ $componente->estado == 'fuera_de_servicio' ? 'selected' : '' }}>Fuera de Servicio</option>
            </select>

            <label for="maquinaria_id">ID de la Maquinaria</label>
            <input type="text" id="maquinaria_id" name="maquinaria_id" value="{{ old('maquinaria_id', $componente->maquinaria_id) }}" required>

            <label for="observaciones">Observaciones</label>
            <textarea id="observaciones" name="observaciones" rows="4">{{ old('observaciones', $componente->observaciones) }}</textarea>

            <button type="submit">Actualizar Componente</button>
        </form>

        <a href="{{ url('componentes') }}" class="btn-back"><i class="fas fa-arrow-left"></i> Volver al Listado</a>
    </div>
</body>
</html>
