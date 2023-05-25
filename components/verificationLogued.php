<?php
    session_start();
    if(!$_SESSION['logued']){
        return header("Location: ./index.php");
    }
    $nombre = $_SESSION['infoUser']['nombre'] ?? 'Super';
    $apellidos = $_SESSION['infoUser']['apellidos'] ?? 'Administrador';
    $rol = $_SESSION['infoUser']['idRol'] ?? 1;
?>