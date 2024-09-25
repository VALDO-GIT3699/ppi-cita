<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Citas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group a {
            display: inline-block;
            margin: 10px 0;
            background-color: #5cb85c;
            color: white;
            padding: 10px 15px;
            border-radius: 4px;
            text-decoration: none;
        }

        .form-group a:hover {
            background-color: #4cae4c;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ccc;
        }

        th {
            background-color: #f2f2f2;
        }

        td a {
            color: #5cb85c;
            text-decoration: none;
        }

        td a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Citas</h1>

        <div class="form-group">
            <a href="{{ route('cita.create') }}">Agregar Cita</a>
        </div>

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
    </div>
</body>

</html>