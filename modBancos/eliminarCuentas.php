<?php
include '../bd_conn.php';
session_start();
$varsession = $_SESSION['usuario'];

if ($varsession == null || $varsession = '') {
    header("location:../index.php?msg=Acceso no autorizado, por favor, inicie sesión.");
} else {
    $clave= $_GET['clave'];
    $cuenta= $_GET['cuenta'];
    $sql = "DELETE FROM `catalogocuenta` WHERE clave = '$clave' AND cuenta = '$cuenta'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:catalogoCuentas.php?msg=Cuenta eliminado con éxito.");
    }
}
