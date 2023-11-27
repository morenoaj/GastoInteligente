<?php
$db_host = "localhost";
$db_usuario = "root";
$db_password = "";
$db_nombre = "monedero_inteligente";

$conexion = mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
