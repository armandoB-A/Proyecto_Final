<?php
include("proyectoP/coneccion/conn.php");

$queryP = "call ingresarUsuarios ('" . $_POST['nombre'] . "', '"  . $_POST['apemt'] . "',  '"  . $_POST['apept'] . "',  '"  . $_POST['direc'] . "',  '"  . $_POST['corre'] . "', '"  . $_POST['telef'] . "');";
echo $queryP;
$exeqQuery = mysqli_query($conn, $queryP);
$tabla = mysqli_fetch_array($exeqQuery);
if (isset($tabla[0])) {

    include("proyectoP/coneccion/conn.php");
    $queryP = "CALL ingresarUSU('". $_POST['usern'] . "', '". $_POST['passw'] . "', ".$tabla[0].");";
    $ejectQuery = mysqli_query($conn, $queryP);
    $row = mysqli_fetch_array($ejectQuery);
    echo "<br><h1>Cliente agregado con exito</h1>";
    echo "<br>";
    echo "<a href='categorias.php?clave=0'>continuar conprando</a>";
    echo "<br>";
    echo "<a href='generarFactura.php?folio=".$foliov."'>generar factura</a>";
} else {
    echo "<h1>no se puedo agregar el usuario</h1><br>";
    echo "<a href='categorias.php?clave=0'>volver</a>";
    //header("location:categorias.php?clave=".$v."&stat=fail");
}
?>