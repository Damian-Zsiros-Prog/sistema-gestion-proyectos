<?php
require_once "./app/functionTask.php";

$idTarea = $_GET['idTarea'];
deleteTaskOfProyect($idTarea);
header("Location: ./gestionar_tareas_proyecto.php?idProyecto=$idTarea");
