<?php
    session_start();
    $_SESSION['logued'] = false;
    $_SESSION['infoUser'] = array();
    header("Location: ../index.php");
?>