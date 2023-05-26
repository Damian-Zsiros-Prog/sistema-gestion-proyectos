<?php
require_once "./app/functionProyectos.php";
$idProyectos = $_POST['idProyecto'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
if (editProyect($idProyectos, $nombre, $descripcion)) {
    header("Location: ./gestionar_proyectos.php");
} else {
    echo `
        <script>
            if(alert('Error al editar el proyecto')){
                window.location.href='./update_project.php';
            }
            
        </script>
    `;
}
