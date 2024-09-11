<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de mensajes</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Correo</td>
            <td>Asunto</td>
            <td>Mensaje</td>
        </tr>
        @foreach ($mensajes as $mensaje)
        <tr>
            <td>{{ $mensaje ->id }}</td>
            <td>{{ $mensaje ->nombre }}</td>
            <td>{{ $mensaje ->correo }}</td>
            <td>{{ $mensaje ->asunto }}</td>
            <td>{{ $mensaje ->mensaje }}</td>
        </tr>
        @endforeach
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>



    </table>


</body>

</html>