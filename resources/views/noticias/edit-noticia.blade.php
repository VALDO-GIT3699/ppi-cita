<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Noticias</title>
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

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #4cae4c;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Editar Noticia</h1>

        <form action="{{ route('noticia.update', $noticia) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" value="{{ old('titulo') ?? $noticia->titulo }}">
            </div>

            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" id="fecha" value="{{ old('fecha') ?? $noticia->fecha }}">
            </div>

            <div class="form-group">
                <label for="noticia">Noticia:</label>
                <textarea name="noticia" id="noticia" cols="30" rows="4">{{ old('noticia') ?? $noticia->noticia }}</textarea>
            </div>

            <div class="form-group">
                <label for="categoria">Categoría:</label>
                <select name="categoria" id="categoria">
                    <option value="Deportes" @selected($noticia->categoria == 'Deportes')>Deportes</option>
                    <option value="Nacional" @selected($noticia->categoria == 'Nacional')>Nacional</option>
                    <option value="Internacional" @selected($noticia->categoria == 'Internacional')>Internacional</option>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>

</html>