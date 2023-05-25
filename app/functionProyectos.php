<?php
require_once "./db/conexion.php";

function getProyectOfUser($idUser)
{
    $proyectos = array();
    $con = getConnection();
    $sql = "SELECT * FROM proyectos WHERE idUsuario=" . $idUser;
    $result = mysqli_query($con, $sql);
    while ($fila = mysqli_fetch_assoc($result)) {
        array_push($proyectos, $fila);
    }
    return $proyectos;
}
