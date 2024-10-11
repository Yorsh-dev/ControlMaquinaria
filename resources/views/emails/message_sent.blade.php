<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Mensaje de Contacto</title>
</head>
<body>
    <h1>Tienes un nuevo mensaje de contacto</h1>
    <p><strong>Nombre:</strong> {{ $data['fullname'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Número celular:</strong> {{ $data['phone'] }}</p>
    <p><strong>Interés:</strong> {{ $data['affair'] }}</p>
    <p><strong>Mensaje:</strong> {{ $data['message'] }}</p>
</body>
</html>