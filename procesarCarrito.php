<?php 
session_start();
if (isset($_GET['clave'])) {
    $v = $_GET['clave']-1;
    $folio = $_GET['folio'];
    
    include("proyectoP/coneccion/conn.php");
    $queryP = "call carritop ('" . $_SESSION['usuario'] . "', '" . $folio . "')";
    echo $queryP;
    $exeqQuery = mysqli_query($conn, $queryP);
    $tabla = mysqli_fetch_array($exeqQuery);
    if ( $tabla[0]=="exito") {
        header("location:categorias.php?clave=".$v."&stat=exito");    
    }else {
        header("location:categorias.php?clave=".$v."&stat=fail");
    }
    
}
?>