<?php
session_start();
$varsession = $_SESSION['usuario'];

if ($varsession == null || $varsession = '') {
    header("location:index.php?msg=Acceso no autorizado, por favor, inicie sesión.");
}

?>