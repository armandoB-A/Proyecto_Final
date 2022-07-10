<?php

session_start();
$cont = "1";
$datos = "";
if (isset($_POST["btnIniciar"])) {

    if (session_status() == 2) {
        session_destroy();
    }
    include("proyectoP/coneccion/conn.php");
    
    $queryP = "call mostrarUsuariosEmpVent ('" . $_POST["loginN"] . "', '" . $_POST["loginC"] . "')";

    $resultado = $conn->query($queryP);
    //Guardamos el registro en la variable $fila
    
    //El resultado de la consulta estarán en nombre y apellido, entonces:

    echo $queryP;
    //$exeqQuery = mysqli_query($conn, $queryP);

    while ($tabla = $resultado->fetch_array()) {
        $cont = $tabla[0];
        if ($cont == "2") {
            $datos = "Bienvenido " . $tabla[1] . " " . $tabla[2] . " " . $tabla[3] . " " . $tabla[4] . " " . $tabla[5] . " " . $tabla[6] . " " . $tabla[7] . " " . $tabla[8] . " ";
            session_start();
            $_SESSION['rol'] = $tabla[9];
            $_SESSION['usuario'] = $_POST["loginN"];
            $_SESSION['pasword'] = $_POST["loginC"];
        }
    }

    if (session_status() == 2) {
        if (isset($_SESSION['usuario'])) {
            ?>
            <script>
                alert("Ingreso como "+<?php echo $_SESSION['rol'];?>);
            </script>
            <?php
            header("location:index.php");
        } else {
            echo "<h4>Debe iniciar sesion</h4>";
            echo "<a href='inicio-session.php'>Iniciar sesion</a>";
        }
    }else{
        ?>
        <script>
            alert("Datos incorrectos");
        </script>
        <?php
        header("location:login.php");
    }
}
?> 