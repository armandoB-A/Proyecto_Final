<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/stilo_aboisai.css">
    <title>CONTACTO</title>
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
                        <a class="nav-link" href="categorias.php">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Sobre_nosotros.php">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="ArmaPc.php">arma tu pc</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Contactanos.php">Contactanos</a>
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
    <h2 style="text-align: center;">CONTACTO</h2>

    <!--Footer-->
    <footer>
        <p class="copyright">
            Arma tu gabinete y compra tu mejor laptop gamer con nosotos , confinza y grantia Llamanos al telefo 0180055902 y aparta tu pc gamer Siguenos en todas nuestra Redes sociales Facebook Twiter
        </p>
    </footer>

</body>

</html>