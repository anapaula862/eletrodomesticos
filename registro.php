<?php
require_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $password = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre, correo, telefono, contraseña, fecha_registro)
            VALUES ('$nombre', '$correo', '$telefono', '$password', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso. <a href='./inicio.html'>Iniciar sesión</a>";
    } else {
        echo "Error SQL: " . $conn->error;
    }
}
?>
