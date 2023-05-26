<?php
require_once "./db/conexion.php";

function getProject($idProject)
{
    $con = getConnection();
    $sql = "SELECT * FROM proyectos WHERE idProyectos=" . $idProject;
    $result = mysqli_query($con, $sql);
    $fila = mysqli_fetch_assoc($result);
    return $fila;
}

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


function createProyect($nombre, $descripcion, $idUsuario)
{
    $con = getConnection();
    $sql = "INSERT INTO proyectos (Nombre,Description,idUsuario) VALUES('" . $nombre . "','" . $descripcion . "'," . $idUsuario . ")";
    $result = mysqli_query($con, $sql);
    return $result;
}

function editProyect($idProject, $nombre, $descripcion)
{
    $con = getConnection();
    $sql = "UPDATE proyectos SET Nombre='" . $nombre . "',Description='" . $descripcion . "' WHERE idProyectos=" . $idProject;
    printf($sql);
    $result = mysqli_query($con, $sql);
    return $result;
}
