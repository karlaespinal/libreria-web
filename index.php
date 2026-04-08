<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Librería Online</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
        }

        .contenedor {
            width: 80%;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            color: #2c3e50;
            text-align: center;
        }

        ul {
            list-style: none;
            padding: 0;
            text-align: center;
        }

        ul li {
            margin: 15px 0;
        }

        ul li a {
            text-decoration: none;
            background-color: #3498db;
            color: white;
            padding: 12px 20px;
            border-radius: 6px;
            display: inline-block;
        }

        ul li a:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<div class="contenedor">
    <h1>Bienvenido a la Librería Online</h1>

    <ul>
        <li><a href="libros.php">Ver Libros</a></li>
        <li><a href="autores.php">Ver Autores</a></li>
        <li><a href="contacto.php">Formulario de Contacto</a></li>
    </ul>
</div>

</body>
</html>