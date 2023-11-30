// register_user.php
<?php
require_once("../lib/db.php");

// Verifica si se han enviado datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Realiza la conexión a la base de datos (puedes utilizar la clase Conexion)
    $conexion = new Conexion();
    $conn = $conexion->obtenerConexion();

    // Hash de la contraseña
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Inserta el usuario en la base de datos
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
