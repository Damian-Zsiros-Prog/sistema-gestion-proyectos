<?php
require_once "./app/functionTask.php";

$idTarea = $_GET['idTarea'];
$idProyecto = $_GET['idProyecto'];
deleteTaskOfProyect($idTarea);
header("Location: ./gestionar_tareas_proyecto.php?idProyecto=$idProyecto");
