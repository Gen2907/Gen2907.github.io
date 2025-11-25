<?php
$conexion = new mysqli("localhost", "root", "", "filmviews");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>