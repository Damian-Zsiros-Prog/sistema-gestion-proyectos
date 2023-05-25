<?php
    session_start();
    if(!$_SESSION['logued']){
        return header("Location: ./index.php");
    }
    $nombre = $_SESSION['infoUser']['nombre'] ?? 'Super';
    $apellidos = $_SESSION['infoUser']['apellidos'] ?? 'Administrador';
    $rol = $_SESSION['infoUser']['idRol'] ?? 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de gestion de proyectos</title>
</head>
<body>
    
</body>
</html>