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

function getTaskForProyect($idProyecto)
{
    $tareas = array();
    $con = getConnection();
    $sql = "SELECT * FROM tareas_proyectos WHERE idProyecto=" . $idProyecto;
    $result = mysqli_query($con, $sql);
    while ($fila = mysqli_fetch_assoc($result)) {
        array_push($tareas, $fila);
    }
    return $tareas;
}

function deleteProyect($idProyecto)
{
    $con = getConnection();
    $sql = "DELETE FROM proyectos WHERE idProyectos=" . $idProyecto;
    $result = mysqli_query($con, $sql);
    return $result;
}


function createProyect($nombre,$descripcion)
{
    $con = getConnection();
    $sql = "INSERT INTO proyectos ";
    $result = mysqli_query($con, $sql);
    return $result;
}