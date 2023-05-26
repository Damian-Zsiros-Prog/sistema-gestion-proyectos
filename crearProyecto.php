<?php
require_once "./app/functionProyectos.php";
session_start();
$idUsuario = $_SESSION['infoUser']['idUsuario'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
if (createProyect($nombre, $descripcion, $idUsuario)) {
    header("Location: ./gestionar_proyectos.php");
} else {
    echo `
        <script>
            if(alert('Error al crear el nuevo proyecto')){
                window.location.href='./create_project.php';
            }
            
        </script>
    `;
}
