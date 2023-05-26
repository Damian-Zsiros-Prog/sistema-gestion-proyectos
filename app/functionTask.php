<?php
require_once "./db/conexion.php";

function createTaskForProyect($idProyecto, $descripcion, $fechaInicio, $fechaFin)
{
    $con = getConnection();
    $sql = "INSERT INTO `tareas_proyectos`(`descripcion`, `fechaInicio`, `fechaFinalizacion`, `estado`, `idProyecto`) VALUES ('" . $descripcion . "','" . $fechaInicio . "','" . $fechaFin . "','En espera','" . $idProyecto . "')";
    printf($sql);
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
