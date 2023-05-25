<?php
    require_once "./app/functionProyectos.php";

    $idProyecto = $_GET['idProyecto'];
    deleteProyect($idProyecto);
    header("Location: ./gestionar_proyectos.php");

?>