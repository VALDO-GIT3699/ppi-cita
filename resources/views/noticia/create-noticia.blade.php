<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>
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
        .form-group textarea {
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
        <h1>NOTICIA</h1>


        <form action="{{ route('noticia.store)}}" method="POST">
            @csrf

           
            <div class="form-group">
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" value="{{ old('titulo') }}" required><br>
            </div>
           

            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha" name="fecha" value="{{ old('fecha') }}" required>
            </div>
            
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="" id="categoria" name="categoria" value="{{ old('categoria') }}" required>
            </div>
            

            <div class="form-group">
                <label for="noticia">Noticia:</label>
                <textarea id="noticia" name="noticia" rows="4" required> "{{ old('noticia') }}"</textarea>
            </div>
            

            <div class="form-group">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>

</body>

</html>