<?php
require_once "./db/conexion.php";

function createTaskForProyect($idProyecto, $descripcion, $fechaInicio, $fechaFin)
{
    $con = getConnection();
    $sql = "INSERT INTO `tareas_proyectos`(`descripcion`, `fechaInicio`, `fechaFinalizacion`, `estado`, `idProyecto`) VALUES ('" . $descripcion . "','" . $fechaInicio . "','" . $fechaFin . "','En espera','" . $idProyecto . "')";
    $result = mysqli_query($con, $sql);
    return $result;
}

function deleteTaskOfProyect($idTask)
{
    $con = getConnection();
    $sql = "DELETE FROM tareas_proyectos WHERE idTareas=" . $idTask;
    $result = mysqli_query($con, $sql);
    return $result;
}

function getTaskById($idTarea)
{
    $con = getConnection();
    $sql = "SELECT * FROM tareas_proyectos WHERE idTareas=" . $idTarea;
    $result = mysqli_query($con, $sql);
    $fila = mysqli_fetch_assoc($result);
    return $fila;
}
function editTaskForProyect($idTarea, $descripcion, $fechaInicio, $fechaFin, $estado)
{
    $con = getConnection();
    $sql = "UPDATE `tareas_proyectos` SET descripcion='" . $descripcion . "', fechaInicio='" . $fechaInicio . "', fechaFinalizacion='" . $fechaFin . "', estado='" . $estado . "' WHERE idTareas=$idTarea";
    $result = mysqli_query($con, $sql);
    return $result;
}
