<?php
include '../bd_conn.php';
session_start();
$varsession = $_SESSION['usuario'];

if ($varsession == null || $varsession = '') {
    header("location:../index.php?msg=Acceso no autorizado, por favor, inicie sesión.");
} else {
    $cheque = $_GET['cheque'];
    $sql = "DELETE FROM `cheques` WHERE cheque = $cheque";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:cancelacionDeCheques.php?msg=Cheque eliminado con éxito.");
    }
}
