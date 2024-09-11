<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
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
        <h1>Formulario de Contacto Para {{ $tipo_persona}}</h1>
        <h1>Contacto</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="/contacto-recibe" method="POST">
            @csrf

            @if ($tipo_persona == 'cliente')
                <div class="form-group">
                    <label for="no_cliente">Número de Cliente:</label>
                    <input type="text" id="no_cliente" name="no_cliente" value="{{ old('no_cliente') }}" required><br>
                </div>
                @error('no_cliente')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            @endif

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
            </div>
            @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="correo">Correo electrónico:</label>
                <input type="email" id="correo" name="correo" value="{{ old('correo') }}" required>
            </div>
            @error('correo')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="asunto">Asunto:</label>
                <input type="text" id="asunto" name="asunto" value="{{ old('asunto') }}" required>
            </div>
            @error('asunto')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="4" required> "{{ old('mensaje') }}"</textarea>
            </div>
            @error('mensaje')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>

</body>

</html>