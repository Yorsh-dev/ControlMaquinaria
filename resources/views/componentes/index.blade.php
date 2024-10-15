<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Componentes de Maquinaria</title>
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

        .component-list {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .component-list th, .component-list td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #333;
        }

        .component-list th {
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

        .status-funcionando {
            color: #28a745; /* Verde */
            font-weight: bold;
        }

        .status-mantenimiento {
            color: #fd7e14; /* Naranja */
            font-weight: bold;
        }

        .status-fuera {
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
        Control de Componentes de Maquinaria
    </header>

    <div class="container">
        <a href="/ControlMaquinaria/public/" class="btn back-btn"><i class="fas fa-arrow-left"></i> Volver al Inicio</a>

        <h2>Listado de Componentes</h2>
        <table class="component-list">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tiempo de Vida</th>
                    <th>Estado</th>
                    <th>Maquinaria ID</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($componentes as $componente)
                <tr>
                    <td>{{ $componente->id }}</td>
                    <td>{{ $componente->nombre }}</td>
                    <td>{{ $componente->tiempo_de_vida }}</td>
                    <td class="{{ $componente->estado == 'funcionando' ? 'status-funcionando' : ($componente->estado == 'mantenimiento' ? 'status-mantenimiento' : 'status-fuera') }}">
                        {{ $componente->estado }}
                    </td>
                    <td>{{ $componente->maquinaria_id }}</td>
                    <td class="actions">
                        <a href="{{ url('componentes/' . $componente->id) }}" class="btn btn-view"><i class="fas fa-eye"></i> Ver</a>
                        <a href="{{ url('componentes/' . $componente->id . '/edit') }}" class="btn btn-edit"><i class="fas fa-edit"></i> Editar</a>
                        <a href="#" class="btn btn-delete" onclick="event.preventDefault(); 
                        if(confirm('¿Estás seguro de que quieres eliminar este componente?')) { 
                            document.getElementById('delete-form-{{ $componente->id }}').submit(); 
                        }">
                            <i class="fas fa-trash-alt"></i> Eliminar
                        </a>
                        <form id="delete-form-{{ $componente->id }}" action="{{ route('componentes.destroy', $componente->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <a href="componentes/create" class="btn" style="margin-top: 20px;"><i class="fas fa-plus"></i> Agregar Nuevo Componente</a>
    </div>
</body>
</html>
