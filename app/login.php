<?php
require_once "../db/conexion.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (!isset($email) || !isset($password)) {
        return header("Location: ../index.php");
    }
    $passwordHashed = md5($password);
    $con = getConnection();
    $sql = "SELECT * FROM usuario WHERE email='" . $email . "' AND contraseña='" . $passwordHashed . "'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['logued'] = true;
        $_SESSION['infoUser'] = mysqli_fetch_assoc($result);
        return header("Location: ../admin.php");
    } else {
        $_SESSION['logued'] = false;
        return header("Location: ../index.php");
    }
} else {
    echo "Error de metodo de envio...";
    stream_set_timeout(header("Location: ../index.php"), 2000);
}
