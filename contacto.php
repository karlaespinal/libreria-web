<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 20px;
        }

        .contenedor {
            width: 50%;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            color: #2c3e50;
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        .boton-volver {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            background-color: #2ecc71;
            color: white;
            padding: 10px 15px;
            border-radius: 6px;
        }

        .boton-volver:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>

<div class="contenedor">
    <h1>Formulario de Contacto</h1>

    <form action="guardar_contacto.php" method="POST">
        <label>Correo:</label>
        <input type="email" name="correo" required>

        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <label>Asunto:</label>
        <input type="text" name="asunto" required>

        <label>Comentario:</label>
        <textarea name="comentario" rows="5" required></textarea>

        <button type="submit">Enviar</button>
    </form>

    <a class="boton-volver" href="index.php">Volver al inicio</a>
</div>

</body>
</html>