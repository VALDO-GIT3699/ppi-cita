<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle Citas</title>
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

        .form-group input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px 15px;
            border-radius: 4px;
        }

        .form-group input[type="submit"]:hover {
            background-color: #4cae4c;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        a {
            display: inline-block;
            margin: 10px 0;
            color: #5cb85c;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>{{ $cita->nombre }}</h1>
        <p>{{ $cita->asunto }}</p>

        <ul>
            <li>Fecha: {{ $cita->fecha }}</li>
            <li>Numero: {{ $cita->numero }}</li>
        </ul>

        <hr>
        <a href="{{ route('cita.edit', $cita) }}">Editar</a>

        <form action="{{ route('cita.destroy', $cita) }}" method="POST" class="form-group">
            @csrf
            @method('DELETE')
            <input type="submit" value="Eliminar">
        </form>
    </div>
</body>

</html>