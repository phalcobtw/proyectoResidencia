<?php
include '../bd_conn.php';

$id = $_GET['id'];
$sql = "DELETE FROM `usuarios` WHERE id = $id";
$result = mysqli_query($conn,$sql);
if ($result) {
    header("location:controlUsuarios.php?msg=Usuario eliminado con éxito.");
}
?>