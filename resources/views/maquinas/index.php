<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Maquinaria</title>
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
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
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
            border-bottom: 1px solid #333;
        }

        .machine-list th {
            background-color: #333;
            color: white;
        }

        .btn {
            background-color: #333;
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
            background-color: #fff;
            color: #333;
        }

        .status-active {
            color: #76ee94;
            font-weight: bold;
        }

        .status-inactive {
            color: #e62f13;
            font-weight: bold;
        }

        .actions {
            display: flex;
            gap: 10px;
        }

        .actions .btn-view {
            background-color: #333;
        }

        .actions .btn-edit {
            background-color: #333;
        }

        .actions .btn-delete {
            background-color: #333;
        }

        .actions .btn-view:hover {
            background-color: #fff;
            color: #333;
        }

        .actions .btn-edit:hover {
            background-color: #fff;
            color: #333;
        }

        .actions .btn-delete:hover {
            background-color: #fff;
            color: #333;
        }

        .btn-back {
            background-color: #333;
            margin-top: 20px;
            text-align: center;
        }

        .btn-back:hover {
            background-color: #fff;
            color: #333;
        }
    </style>
</head>
<body>
    <header>
        Control de Maquinaria
    </header>

    <div class="container">
        <!-- Botón para volver al inicio -->
        <a href="/ControlMaquinaria/public/" class="btn btn-back"><i class="fas fa-arrow-left"></i> Volver al inicio</a>
        <h2>Listado de Máquinas</h2>
        <table class="machine-list">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Modelo</th>
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
                        <a href="maquinas/1/edit" class="btn btn-edit"><i class="fas fa-edit"></i> Editar</a>
                        <a href="#" class="btn btn-delete"><i class="fas fa-trash-alt"></i> Eliminar</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Cargadora X200</td>
                    <td>Cargadora</td>
                    <td class="status-inactive">Inactiva</td>
                    <td class="actions">
                        <a href="maquinas/2" class="btn btn-view"><i class="fas fa-eye"></i> Ver</a>
                        <a href="maquinas/2/edit" class="btn btn-edit"><i class="fas fa-edit"></i> Editar</a>
                        <a href="#" class="btn btn-delete"><i class="fas fa-trash-alt"></i> Eliminar</a>
                    </td>
                </tr>
                <!-- Agrega más filas según sea necesario -->
            </tbody>
        </table>

        <!-- Botón para agregar nueva maquina -->
        <a href="maquinas/create" class="btn" style="margin-top: 20px;"><i class="fas fa-plus"></i> Agregar Nueva Máquina</a>
    </div>
</body>
</html>
