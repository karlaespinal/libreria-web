<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"];
    $nombre = $_POST["nombre"];
    $asunto = $_POST["asunto"];
    $comentario = $_POST["comentario"];

    $sql = "INSERT INTO contacto (correo, nombre, asunto, comentario) 
            VALUES (:correo, :nombre, :asunto, :comentario)";

    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(":correo", $correo);
    $stmt->bindParam(":nombre", $nombre);
    $stmt->bindParam(":asunto", $asunto);
    $stmt->bindParam(":comentario", $comentario);

    if ($stmt->execute()) {
        echo "
        <!DOCTYPE html>
        <html lang='es'>
        <head>
            <meta charset='UTF-8'>
            <title>Mensaje guardado</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f6f9;
                    text-align: center;
                    padding: 50px;
                }

                .mensaje {
                    background: white;
                    display: inline-block;
                    padding: 30px;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0,0,0,0.1);
                }

                a {
                    display: inline-block;
                    margin-top: 20px;
                    text-decoration: none;
                    background-color: #3498db;
                    color: white;
                    padding: 10px 15px;
                    border-radius: 6px;
                }

                a:hover {
                    background-color: #2980b9;
                }
            </style>
        </head>
        <body>
            <div class='mensaje'>
                <h2>✅ Mensaje guardado correctamente</h2>
                <a href='index.php'>Volver al inicio</a>
            </div>
        </body>
        </html>
        ";
    } else {
        echo "Error al guardar el mensaje.";
    }
}
?>