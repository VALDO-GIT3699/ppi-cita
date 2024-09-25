<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    </table>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Asunto</th>
                <th>Numero</th>
                <th>Creación</th>
                <th>Edición</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($citas as $cita)
            <tr>
                <td>{{ $cita->id }}</td>
                <td>
                    <a href="{{ route('cita.show', $cita) }}">
                        {{ $cita->nombre }}
                    </a>
                </td>
                <td>{{ $cita->fecha }}</td>
                <td>{{ $cita->asunto }}</td>
                <td>{{ $cita->numero }}</td>
                <td>{{ $cita->created_at }}</td>
                <td>{{ $cita->updated_at }}</td>
                <td>
                    <a href="{{ route('cita.edit', $cita) }}">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>