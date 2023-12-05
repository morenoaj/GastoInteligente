<?php
require_once("../lib/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $conexion = new Conexion();
    $conn = $conexion->obtenerConexion();

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, password_hash) VALUES (:nombre, :email, :password)");
    $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':password', $hashed_password, PDO::PARAM_STR);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Usuario registrado con éxito"]);
    } else {
        echo json_encode(["success" => false, "message" => "Error al registrar el usuario: " . implode(" ", $stmt->errorInfo())]);
    }
}
?>
