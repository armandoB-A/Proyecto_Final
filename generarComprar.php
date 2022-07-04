<?php
session_start();
$foliov = date('mdYhis', time());

include("proyectoP/coneccion/conn.php");
$queryP = "call ingresarVenta ('" . $foliov . "', '" . $_SESSION['usuario'] . "');";
$exeqQuery = mysqli_query($conn, $queryP);
$tabla = mysqli_fetch_array($exeqQuery);
if ($tabla[0] == "exito") {

    include("proyectoP/coneccion/conn.php");
    $queryP = "CALL mostarcarrito();";
    $ejectQuery = mysqli_query($conn, $queryP);
    while ($row = mysqli_fetch_array($ejectQuery)) {
        include("proyectoP/coneccion/conn.php");
        $queryP = "call ingresarDVenta ('" . $foliov . "', '" . $row[0] . "', '" . $row[3] . "');";
        mysqli_query($conn, $queryP);
        
    }
    echo "<br><h1>productos agregados con exito</h1>";
    echo "<br>";
    echo "<a href='categorias.php?clave=0'>continuar conprando</a>";
    echo "<br>";
    echo "<a href='generarFactura.php?folio=".$foliov."'>generar factura</a>";
} else {
    echo "<h1>no se puedo agregar la compra</h1><br>";
    echo "<a href='categorias.php?clave=0'>volver</a>";
    //header("location:categorias.php?clave=".$v."&stat=fail");
}
