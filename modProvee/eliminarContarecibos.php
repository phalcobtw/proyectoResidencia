<?php
include '../bd_conn.php';
session_start();
$varsession = $_SESSION['usuario'];

if ($varsession == null || $varsession = '') {
    header("location:../index.php?msg=Acceso no autorizado, por favor, inicie sesión.");
} else {
    $idContrarecibos = $_GET['id'];
    $sql = "DELETE FROM `cheques` WHERE id = $idContrarecibos";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:capturaContrarecibos.php?msg=Contrarecibo eliminado con éxito.");
    }
}
