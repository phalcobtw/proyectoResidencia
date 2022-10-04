<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siatec";
date_default_timezone_set('America/Mazatlan');
$date = date('Y/m');
$fulldate = date('Y/m/d');

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
    die("Conexion fallida" . mysqli_connect_error());
}
/* echo "Conexion con exito"; */
?>