<?php
include '../bd_conn.php';
session_start();
$varsession = $_SESSION['usuario'];

if ($varsession == null || $varsession = '') {
    header("location:../index.php?msg=Acceso no autorizado, por favor, inicie sesión.");
} else {
    $id= $_GET['id'];
    $sql = "DELETE FROM `partidacatalogo` WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:partidasCatalogos.php?msg=Partida eliminado con éxito.");
    }
}