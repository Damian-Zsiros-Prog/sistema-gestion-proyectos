<?php
require_once "./app/functionTask.php";
session_start();
$idProyecto = $_POST['idProyecto'];
$descripcion = $_POST['descripcion'];
$fechaInicio = $_POST['fechaInicio'];
$fechaFinalizacion = $_POST['fechaFinalizacion'];
if (createTaskForProyect($idProyecto, $descripcion, $fechaInicio, $fechaFinalizacion)) {
    header("Location: ./gestionar_tareas_proyecto.php?idProyecto=$idProyecto");
} else {
    echo `
        <script>
            if(alert('Error al crear la neuva tarea para el proyecto')){
                window.location.href='./create_task_for_project.php';
            }
            
        </script>
    `;
}
