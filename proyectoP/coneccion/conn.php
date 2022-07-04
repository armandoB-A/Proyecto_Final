<?php
    $servername = "localhost";
    $database = "jarmando_pcomponentesh";
    $username = "root";
    $password = "  ";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if (!$conn) {
        die("Connexion fallida: " . mysqli_connect_error());
    }
    
    mysqli_query($conn, "SET NAMES 'utf8'");
?>