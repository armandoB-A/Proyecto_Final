<?php
    $servername = "localhost";
    $database = "u601353498_pcomponentes";
    $username = "u601353498_pcomponentessh";
    $password = "Putofermin1@";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if (!$conn) {
        die("Connexion fallida: " . mysqli_connect_error());
    }
    
    mysqli_query($conn, "SET NAMES 'utf8'");
?>