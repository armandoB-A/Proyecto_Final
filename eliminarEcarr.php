<?php
if (isset($_GET['clave'])) {
    include ("proyectoP/coneccion/conn.php");
    $queryP = "call borraEcar ('" . $_GET['clave'] . "')";
    
    $exeqQuery = mysqli_query($conn, $queryP);
    $tabla = mysqli_fetch_array($exeqQuery);
    if ( $tabla[0]=="exito") {
        header("location:procesarCompra_carrito.php");    
    }else {
        header("location:procesarCompra_carrito.php");
    }
}
?>