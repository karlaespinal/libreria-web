
<?php
$host = "sql110.infinityfree.com";
$dbname = "if0_41605663_libreria";
$usuario = "if0_41605663";
$contrasena = "U3lN4vh6ErtO";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexion: " . $e->getMessage());
}
?>