<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja de Vida</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #333;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            margin-top: 10px;
            padding: 10px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">

        <form action="{{route('formulario.form')}}"method="post" enctype="multipart/form/data>
           @csrf
           <h1>Hoja de Vida</h1>
            <div class="section">
                <h2>Datos Personales</h2>
                <label>Nombre Completo:</label>
                <input type="text" id="nombre" required>

                <label>Email:</label>
                <input type="email" id="email" required>

                <label>Contraseña:</label>
                <input type="password" id="contraseña"  required>

                <label for="rol">Rol:</label>
                <select id="rol" name="rol">
                    <option value="admin">Administrador</option>
                    <option value="empleador">empleador</option>
                    <option value="empleado">Empleado</option>
                </select>

                <label>Teléfono:</label>
                <input type="tel" id="telefono" required>
                <label>Dirección:</label>
                <input type="text" id="direccion" required>
            </div>

            <button type="submit">registrarse </button>
        </form>
    </div>
</body>
</html>