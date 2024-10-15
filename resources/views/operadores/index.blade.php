<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Operadores de Maquinaria</title>
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
            border-bottom: 1px solid #333;
        }

        .operator-list th {
            background-color: #efb810;
            color: white;
        }

        .btn {
            background-color: #007bff;
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
            background-color: #0056b3;
        }

        .status-operativo {
            color: #28a745; /* Verde */
            font-weight: bold;
        }

        .status-fuera_servicio {
            color: #dc3545; /* Rojo */
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
            background-color: #5e6266;
            margin-top: 20px;
            text-align: center;
        }

        .btn-back:hover {
            background-color: #333;
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
                    <th>Teléfono</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($operadores as $operador)
                <tr>
                    <td>{{ $operador->id }}</td>
                    <td>{{ $operador->nombre }}</td>
                    <td>{{ $operador->telefono }}</td>
                    <td class="{{ $operador->estado == 'operativo' ? 'status-operativo' : 'status-fuera_servicio' }}">
                        {{ $operador->estado }}
                    </td>
                    <td class="actions">
                        <a href="{{ url('operadores/' . $operador->id) }}" class="btn btn-view"><i class="fas fa-eye"></i> Ver</a>
                        <a href="{{ url('operadores/' . $operador->id . '/edit') }}" class="btn btn-edit"><i class="fas fa-edit"></i> Editar</a>
                        <a href="#" class="btn btn-delete" onclick="event.preventDefault(); 
                        if(confirm('¿Estás seguro de que quieres eliminar este operador?')) { 
                            document.getElementById('delete-form-{{ $operador->id }}').submit(); 
                        }">
                        <i class="fas fa-trash-alt"></i> Eliminar
                    </a>
                    <form id="delete-form-{{ $operador->id }}" action="{{ route('operadores.destroy', $operador->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <!-- Botón para agregar nuevo operador -->
        <a href="operadores/create" class="btn" style="margin-top: 20px;"><i class="fas fa-plus"></i> Agregar Nuevo Operador</a>
    </div>
</body>
</html>
