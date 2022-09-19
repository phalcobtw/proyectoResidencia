<?php
include '../bd_conn.php';
session_start();
$varsession = $_SESSION['usuario'];

if ($varsession == null || $varsession = '') {
    header("location:../index.php?msg=Acceso no autorizado, por favor, inicie sesión.");
} else {
    $clave = $_GET['clave'];
    $sql = "DELETE FROM `catalogobanco` WHERE clave = $clave";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:catalogobanks.php?msg=Banco eliminado con éxito.");
    }
}
