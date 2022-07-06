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
                        <a class="nav-link active" aria-current="page" href="categorias.php">Categorias</a>
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
                    <h5>usuario </h5>
                    <?php
                    if (isset($_SESSION['usuario'])) {
                    ?>
                        <a class="btn btn-success" type="button" href="login.php"><?php echo $_SESSION['usuario'] ?></a>
                    <?php
                    }

                    ?>

                </div>
            </div>
        </div>
    </nav>

    <div class="carrostylo">
        <h2 style="text-align: center; justify-content: center;"> Carrito de compras</h2>
    </div>

    <div class="bd-example">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">cantidad</th>
                    <th scope="col">eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("proyectoP/coneccion/conn.php");
                global $conn;
                if (isset($_SESSION['usuario'])) {
                    $ejectQuery = mysqli_query($conn, "CALL mostrarCarritoC('" . $_SESSION['usuario'] . "')");
                    $i = 1;
                    while ($row = mysqli_fetch_array($ejectQuery)) {
                        echo "<tr>
                            <td>" . $i . "</td>
                            <td>" . $row[1] . "</td>
                            <td>" . $row[2] . "</td>
                            <td>" . $row[3] . "</td>
                            <td><a href='eliminarEcarr.php?clave=$row[0]'><i class='fas fa-trash-alt' title='Eliminar'></i></a></td>";

                        echo "</tr>\n";
                        $i++;
                    }
                    $i = 1;
                }

                ?>
            </tbody>
        </table>
        <div class="layBTNcomp" style="display: flex; flex-direction: column; margin-right: 50px;">
            <a class="btn btn-danger" style="margin: 10px; align-self: flex-end;" href="generarComprar.php"> Procesar compra</a>
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