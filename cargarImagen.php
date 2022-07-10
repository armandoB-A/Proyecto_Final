<?php
session_start();
$folio = $_GET['folio'];

include("proyectoP/coneccion/conn.php");

$ejectQuery = mysqli_query($conn, "SELECT imagen FROM componente_jarmando where clave_componente_jarmando='$folio';");
$row = mysqli_fetch_array($ejectQuery);
header("Content-type: image/jpg"); 
echo $row[0]; 
?>
