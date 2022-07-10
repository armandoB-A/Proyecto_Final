<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/stilo_aboisai.css">
    <title>PROYECTO LOS CHAGYS Y GELIS</title>
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
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categorias.php?clave=0">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Sobre_nosotros.php">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ArmaPc.php">Contactanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contactanos.php">Contactanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Mi cuenta</a>
                    </li>

                </ul>
              
            </div>
        </div>
    </nav>
    <!--CARRUCEL-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner ">
            <div class="  carousel-item active">
                <a href="ArmaPc.php"><img src="img/2.jpg" class="d-block w-100" alt="..."></a>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Arma tu pc</h5>
                    <p>Genera el presupuesto de tu PC ideal.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/pc3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--RIBON-->
    <div id="ribbon" class="container-fluid">
        <div id="brithday" class="container w-75 pl-2">

            <div class="row align-items-center">
                <div class="col-sm p-3">
                    <img src="img/PC_Gamer_logo.png" alt="" class="w-75 mx-auto">
                </div>
                <div class="col-sm p-3 text-light text-center">
                    <p>Arma tu pc Gamer</p>
                    <h4>Cotizacion de precios y componentes</h4>

                </div>
            </div>
        </div>
    </div>
    </div>
    <!--COMPONENTES-->
    <div id="componentes">
        <div class="container-md">
            <div class="row">
                <h3 class="text-center pb-5 pt-5 " style="color:beige"> ¡¡¡Lista de componetes para armar tu pc!!! </h3>
            </div>
            <div class="row row-cols- row-cols-md-4 g-4">
                <?php
                include("proyectoP/coneccion/conn.php");
                $catego = "";
                if ($catego == "") {
                    $sql = "";
                } else {
                    $sql = " WHERE id_categoria_jarmando = (SELECT id_categoria_jarmando FROM categoria_jarmando WHERE nombre_categoria_jarmando='" . $catego . "' )";
                }
                $ejectQuery = mysqli_query($conn, "SELECT nombre_componente_jarmando,descripcion_componente_jarmando, precio_actual_componente_jarmando FROM componente_jarmando " . $sql . ";");
                while ($row = mysqli_fetch_array($ejectQuery)) {
                    echo "
                     <div class='col'>
                     <div class='card h-100'>
                             <div class='card-body'>
                                 <h5 class='card-title'>" . $row[0] . "</h5>
                                 <p class='card-text'>" . $row[1] . "</p>
                               
                             </div>
                         </div>
                         </div>

                         ";
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


    <script src="bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

</body>

</html>