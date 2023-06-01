<?php
require_once "./app/functionTask.php";
$idProyecto = $_POST['idProyecto'];
$idTarea = $_POST['idTarea'];
$descripcion = $_POST['descripcion'];
$fechaInicio = $_POST['fechaInicio'];
$fechaFinalizacion = $_POST['fechaFinalizacion'];
$estado = $_POST['estado'];
if (editTaskForProyect($idTarea, $descripcion, $fechaInicio, $fechaFinalizacion, $estado)) {
    header("Location: ./gestionar_tareas_proyecto.php?idProyecto=$idProyecto");
} else {
    echo `
        <script>
            if(alert('Error al editar la tarea del proyecto')){
                window.location.href='./update_task_for_project.php?idTarea=$idTarea';
            }
            
        </script>
    `;
}
