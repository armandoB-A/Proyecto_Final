<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/stilo_aboisai.css">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/style.css">

    <title>Document</title>
</head>

<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid .mb-6">
            <a class="navbar-brand " href="#">Presupuestos para Tu PC </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="categorias.php?clave=0">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Sobre_nosotros.php">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="Contactanos.php">arma tu pc</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contactanos.php">Contactanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Mi cuenta</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <h5>usuario  </h5>
                    <?php
                    if (isset($_SESSION['usuario'])) {
                        ?>
                        <a class="btn btn-success" type="button" href="login.php"><?php echo $_SESSION['usuario']?></a>
                        <?php
                    }
                    
                    ?>

                </div>
            </div>
        </div>
    </nav>

    <div class="carrostylo">
        <h2 style="text-align: center; justify-content: center;"> Categorias</h2>
        <?php
        if (isset($_SESSION['usuario'])) {
            include("proyectoP/coneccion/conn.php");
            $queryP = "SELECT count(*) FROM carrito_td WHERE id_usuario=(SELECT idUsusrio FROM usuario_jarmando WHERE usuario='".$_SESSION['usuario']."');";
            $exeqQuery = mysqli_query($conn, $queryP);
            $tabla = mysqli_fetch_array($exeqQuery);
            
            ?>
            <a href="procesarCompra_carrito.php"><i class='fa-solid fa-cart-shopping w3-xxlarge' style='color: #f3da35;font-size:50px; justify-content: flex-end;'>
                <span class="badge bg-primary rounded-pill" style='color: #f3da35;font-size:15px;'><?php echo $tabla[0] ?></span>
            </i></a>
            <?php
        }
        ?>
        
    </div>

    <div class="bd-example">
        <div class="row">
            <div class="col-3">
                <div id="list-example" class="list-group">
                    <?php
                    include("proyectoP/coneccion/conn.php");
                    $ejectQuery = mysqli_query($conn, "SELECT nombre_categoria_jarmando FROM categoria_jarmando");
                    $v = -1;
                    if (isset($_GET['clave'])) {
                        $v = $_GET['clave'];
                    }

                    $i = 0;
                    $categ = "";
                    while ($row = mysqli_fetch_array($ejectQuery)) {
                        if ($i == $v) {
                            echo "<a class='list-group-item list-group-item-action active' href='categorias.php?clave=" . $i . "' _msthash='297375' _msttexthash='50518'>" . $row[0] . "</a>";
                            $categ = $row[0];
                        } else {
                            echo "<a class='list-group-item list-group-item-action ' href='categorias.php?clave=" . $i . "' _msthash='297375' _msttexthash='50518'>" . $row[0] . "</a>";
                        }
                        $i++;
                    }
                    if (session_status() == 2) {
                        if (isset($_SESSION['usuario']) && isset($_SESSION['pasword']) && $_SESSION['rol'] == "administrador") { #L4T3M1BL3$
                            echo ($_SESSION['rol']);
                    ?>
                            <a class="list-group-item list-group-item-action" href="proyectoP/ingresarMarcas.php" _msthash="297375" _msttexthash="50518">Ingresar Marcas</a>
                            <a class="list-group-item list-group-item-action" href="proyectoP/pocesar-marc.php" _msthash="297492" _msttexthash="50661">Mostrar marcas</a>
                            <a class="list-group-item list-group-item-action" href="proyectoP/ingresarCategrias.php" _msthash="297375" _msttexthash="50518">Ingresar categorias</a>
                            <a class="list-group-item list-group-item-action" href="proyectoP/pocesar-cat.php" _msthash="297492" _msttexthash="50661">Mostrar categorias</a>
                            <a class="list-group-item list-group-item-action" href="proyectoP/IngresarComponentes.php" _msthash="297492" _msttexthash="50661">Ingresar Componentes</a>
                            <a class="list-group-item list-group-item-action" href="proyectoP/pocesar-comp.php" _msthash="297492" _msttexthash="50661">Mostrar Componentes</a>
                    <?php
                        }
                    }
                    ?>


                </div>
            </div>
            <div class="col-9">
                <div id="conti" class="conenedor-imagenes" style="display: flex;">
                    <?php
                    include("proyectoP/coneccion/conn.php");
                    if ($categ == "") {
                        $sql = "";
                    } else {
                        $sql = " WHERE id_categoria_jarmando = (SELECT id_categoria_jarmando FROM categoria_jarmando WHERE nombre_categoria_jarmando='" . $categ . "' )";
                    }
                    $ejectQuery = mysqli_query($conn, "SELECT nombre_componente_jarmando,descripcion_componente_jarmando, precio_actual_componente_jarmando, clave_componente_jarmando  FROM componente_jarmando " . $sql . ";");
                    while ($row = mysqli_fetch_array($ejectQuery)) {
                        echo "
                            <div class='card' style='width: 18rem; margin: 20px;'>
                                <img src='...' class='card-img-top' alt='...'>
                                <div class='card-body' id='" . $row[3] . "' name=\"" . $row[3] . "\" >
                                    <h5 class='card-title'>" . $row[0] . "</h5>
                                    <p class='card-text'>" . $row[1] . "</p>
                                    <a  href=\"procesarCarrito.php?clave=" . $i  . "&folio=" . $row[3] . "\"><button onclick=\"clickMe('" . $row[3] . "')\" type='button' class='btn btn-primary' > $" . $row[2] . " </button></a>
                                    
                                </div>
                            </div>
                            ";
                    }
                    ?>

                    <script>
                        var result
                        result = "sss";

                        function clickMe(param1) {
                            permiso="<?php ?>";
                            //document.getElementById("" + param1 + "").value = valor;
                            result = param1;
                            //
                            //
                            alert(resultado + " " + param1);
                        }
                    </script>
                    <?php
                    function permiso()
                    {
                        # code...
                    }
                    /*
                    $s = "";
                    $clave = "";
                    function metodo1()
                    {
                        global $s, $clave;
                        $clave = "<script> document.write(result) </script>";
                        $s = "Producto agregado correctamente";
                    }
                    function metodo2()
                    {
                        global $s, $clave;
                        echo $s . $clave;
                    }*/
                    if (isset($_GET['stat'])) {
                        if ($_GET['stat'] == "exito") {
                    ?>
                            <script>
                                alert("Producto agregado con exito");
                            </script>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-->
    <footer>
        <p class="copyright">
            Arma tu gabinete y compra tu mejor laptop gamer con nosotos , confinza y grantia Llamanos al telefo 0180055902 y aparta tu pc gamer Siguenos en todas nuestra Redes sociales Facebook Twiter
        </p>
    </footer>

</body>

</html>