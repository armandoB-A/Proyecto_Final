<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/stilo_aboisai.css">
    <title>MI cuenta</title>
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
                        <a class="nav-link " href="ArmaPc.php">Arma tu pc</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contactanos.php">Contactanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Micuenta.html">Mi cuenta</a>
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
   
    <!--Inicio secion de mi cuenta-->
    <div  id="componentes " class="container">
       <!--LOgo-->
    
    <img src="img/PC_Gamer_logo.png" class="container" alt="" id="imglogo">
    
    <!--fin logo-->
    <form class="row g-3 needs-validation" novalidate>
         <div class="col-md-4 position-relative">
            <label for="validationTooltip01" class="form-label">First name</label>
            <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
        <div class="valid-tooltip">
        Looks good!
        </div>
         </div>
            <div class="col-md-4 position-relative">
                    <label for="validationTooltip02" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
            <div class="valid-tooltip">
            Looks good!
            </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltipUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
      <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
      <div class="invalid-tooltip">
        Please choose a unique and valid username.
      </div>
    </div>
  </div>
  <div class="col-md-6 position-relative">
    <label for="validationTooltip03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationTooltip03" required>
    <div class="invalid-tooltip">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip04" class="form-label">State</label>
    <select class="form-select" id="validationTooltip04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-tooltip">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationTooltip05" required>
    <div class="invalid-tooltip">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</div>
</form>
<!--Footer-->
<footer>
    <p class="copyright">
        Arma tu gabinete y compra tu mejor laptop gamer con nosotos , confinza y grantia Llamanos al telefo 0180055902 y aparta tu pc gamer Siguenos en todas nuestra Redes sociales Facebook Twiter
    </p>
    </footer>

</body>

</html>