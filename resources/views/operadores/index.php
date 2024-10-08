<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Operadores de Maquinaria</title>
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
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        .operator-list {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .operator-list th, .operator-list td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .operator-list th {
            background-color: #007bff;
            color: white;
        }

        .btn {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn i {
            margin-right: 5px;
        }

        .btn:hover {
            background-color: #218838;
        }

        .back-btn {
            background-color: #007bff;
            margin-bottom: 20px;
        }

        .back-btn i {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <header>
        Control de Operadores de Maquinaria
    </header>

    <div class="container">
        <!-- Botón Volver al Inicio -->
        <a href="/ControlMaquinaria/public/" class="btn back-btn"><i class="fas fa-arrow-left"></i> Volver al Inicio</a>

        <h2>Listado de Operadores</h2>
        <table class="operator-list">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Máquinas Asignadas</th>
                    <th>Certificaciones</th>
                    <th>Última Asignación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Juan Pérez</td>
                    <td>Excavadora 3000, Cargadora X200</td>
                    <td>Certificación de Operador de Excavadora</td>
                    <td>01/09/2024</td>
                    <td>
                        <a href="/operadores/1/edit" class="btn">Editar</a>
                        <a href="/operadores/1" class="btn">Ver</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>María López</td>
                    <td>Retroexcavadora B150</td>
                    <td>Certificación de Seguridad Industrial</td>
                    <td>15/09/2024</td>
                    <td>
                        <a href="/operadores/2/edit" class="btn">Editar</a>
                        <a href="/operadores/2" class="btn">Ver</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Carlos Ruiz</td>
                    <td>Bulldozer D450</td>
                    <td>Certificación de Operador de Bulldozer</td>
                    <td>20/09/2024</td>
                    <td>
                        <a href="/operadores/3/edit" class="btn">Editar</a>
                        <a href="/operadores/3" class="btn">Ver</a>
                    </td>
                </tr>
                <!-- Agrega más filas según sea necesario -->
            </tbody>
        </table>

        <!-- Botón para agregar nuevo operador -->
        <a href="operadores/create" class="btn" style="margin-top: 20px;"><i class="fas fa-plus"></i> Agregar Nuevo Operador</a>
    </div>
</body>
</html>
