<?php
include '../bd_conn.php';
session_start();
$varsession = $_SESSION['usuario'];

if ($varsession == null || $varsession = '') {
    header("location:../index.php?msg=Acceso no autorizado, por favor, inicie sesión.");
} else {
    $clave= $_GET['clave'];
    $cuenta= $_GET['cuenta'];
    $sql = "DELETE FROM `cuentacatalogo` WHERE cuenta = '$cuenta'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:cuentaCatalogos.php?msg=Cuenta eliminado con éxito.");
    }
}
