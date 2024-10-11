<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Maquinaria</title>
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

        .machine-list {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .machine-list th, .machine-list td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .machine-list th {
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

        .status-active {
            color: #28a745;
            font-weight: bold;
        }

        .status-inactive {
            color: #dc3545;
            font-weight: bold;
        }

        .actions {
            display: flex;
            gap: 10px;
        }

        .actions .btn-view {
            background-color: #17a2b8;
        }

        .actions .btn-edit {
            background-color: #ffc107;
        }

        .actions .btn-delete {
            background-color: #dc3545;
        }

        .actions .btn-view:hover {
            background-color: #138496;
        }

        .actions .btn-edit:hover {
            background-color: #e0a800;
        }

        .actions .btn-delete:hover {
            background-color: #c82333;
        }

        .btn-back {
            background-color: #007bff;
            margin-top: 20px;
            text-align: center;
        }

        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        Control de Maquinaria
    </header>

    <div class="container">
        <h2>Listado de Máquinas</h2>
        <table class="machine-list">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Excavadora 3000</td>
                    <td>Excavadora</td>
                    <td class="status-active">Activa</td>
                    <td class="actions">
                        <a href="maquinas/1" class="btn btn-view"><i class="fas fa-eye"></i> Ver</a>
                        <a href="/maquinas/1/edit" class="btn btn-edit"><i class="fas fa-edit"></i> Editar</a>
                        <a href="#" class="btn btn-delete"><i class="fas fa-trash-alt"></i> Eliminar</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Cargadora X200</td>
                    <td>Cargadora</td>
                    <td class="status-inactive">Inactiva</td>
                    <td class="actions">
                        <a href="/maquinas/2" class="btn btn-view"><i class="fas fa-eye"></i> Ver</a>
                        <a href="/maquinas/2/edit" class="btn btn-edit"><i class="fas fa-edit"></i> Editar</a>
                        <a href="#" class="btn btn-delete"><i class="fas fa-trash-alt"></i> Eliminar</a>
                    </td>
                </tr>
                <!-- Agrega más filas según sea necesario -->
            </tbody>
        </table>

        <a href="maquinas/create" class="btn" style="margin-top: 20px;"><i class="fas fa-plus"></i> Agregar Nueva Máquina</a>

        <!-- Botón para volver al inicio -->
        <a href="/ControlMaquinaria/public/" class="btn btn-back"><i class="fas fa-arrow-left"></i> Volver</a>
    </div>
</body>
</html>
