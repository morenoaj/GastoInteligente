<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: localhost'); // Reemplaza * con el dominio de tu aplicación en producción


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once("../lib/db.php");
    $conexion = new Conexion();
    $conn = $conexion->obtenerConexion();

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, password_hash) VALUES (?, ?, ?)");
    $stmt->bindParam("sss", $nombre, $email, $hashed_password);

    if ($stmt->execute()) {
        echo json_encode(array("success" => true, "message" => "Usuario registrado con éxito"));
    } else {
        echo json_encode(array("success" => false, "message" => "Error al registrar el usuario"));
    }
}
?>
