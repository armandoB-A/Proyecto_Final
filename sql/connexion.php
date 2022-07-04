<?php
    $servername = "localhost";
    $database = "tienda";
    $username = "root";
    $password = "";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if (!$conn) {
        die("Connexion fallida: " . mysqli_connect_error());
    }
    
    mysqli_query($conn, "SET NAMES 'utf8'");
    
    //"CALL TD_insert_prod('0000000000021','LATAS DE CHICHAROS','DESCRIPCION','LATAS DE CHICHAROS',100,60,20,105,'LATA','800gr','VERDURAS','LA COSTEÑA','0');"
    
?>