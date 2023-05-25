<?php
require_once "../db/conexion.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (!isset($nombre) || !isset($apellidos) || !isset($email) || !isset($password)) {
        return header("Location: ../registrase.php");
    }
    $passwordHashed = md5($password);
    $con = getConnection();
    $sql = "INSERT INTO usuario (nombre,apellidos,email,contraseña,idRol) VALUES ('".$nombre."','".$apellidos."','".$email."','".$passwordHashed."',2)";
    $result = mysqli_query($con, $sql);
    if ($result) {
        return header("Location: ../index.php");
    } else {
        return header("Location: ../registrarse.php");
    }
} else {
    echo "Error de metodo de envio...";
    stream_set_timeout(header("Location: ../registrarse.php"), 2000);
}
