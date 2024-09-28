<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nuevo Operador</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f9;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #007bff;
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
            background-color: #28a745;
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
            background-color: #218838;
        }

        .back-btn {
            background-color: #6c757d;
            margin-top: 10px;
        }

        .back-btn:hover {
            background-color: #5a6268;
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
            @csrf

            <label for="id">ID del Operador</label>
            <input type="text" id="id" name="id" placeholder="Ej. 001" required>

            <label for="nombre">Nombre del Operador</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ej. Juan Pérez" required>

            <label for="maquinas_asignadas">Máquinas Asignadas</label>
            <input type="text" id="maquinas_asignadas" name="maquinas_asignadas" placeholder="Ej. Excavadora 3000, Cargadora X200" required>

            <label for="certificaciones">Certificaciones</label>
            <input type="text" id="certificaciones" name="certificaciones" placeholder="Ej. Certificación de Operador de Excavadora" required>

            <label for="ultima_asignacion">Última Asignación</label>
            <input type="date" id="ultima_asignacion" name="ultima_asignacion" required>

            <button type="submit" class="btn"><i class="fas fa-save"></i> Guardar Operador</button>
        </form>

        <a href="/operadores" class="btn back-btn"><i class="fas fa-arrow-left"></i> Volver al Listado</a>
    </div>

</body>
</html>
