<?php
include("conexion.php");

$sql = "SELECT titulo, tipo, precio FROM titulos";
$stmt = $conexion->prepare($sql);
$stmt->execute();
$libros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 20px;
        }

        .contenedor {
            width: 90%;
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th {
            background-color: #3498db;
            color: white;
            padding: 10px;
        }

        td {
            padding: 10px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .boton {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            background-color: #2ecc71;
            color: white;
            padding: 10px 15px;
            border-radius: 6px;
        }

        .boton:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>

<div class="contenedor">
    <h1>Lista de Libros</h1>

    <table>
        <tr>
            <th>Título</th>
            <th>Tipo</th>
            <th>Precio</th>
        </tr>

        <?php foreach ($libros as $libro): ?>
            <tr>
                <td><?php echo $libro['titulo']; ?></td>
                <td><?php echo $libro['tipo']; ?></td>
                <td><?php echo $libro['precio']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a class="boton" href="index.php">Volver al inicio</a>
</div>

</body>
</html>