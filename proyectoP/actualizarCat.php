<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>

<body>
    <form class="needs-validation" action="actualizarIng.php" method="post">
        <?php
        include("/laragon/www/admin/logn/conection.php")
        ?>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom01">Id categoria</label>
                <?php
                echo "<input type='text' class='form-control' id='validationCustom01' placeholder='clave' name='claveP' value=" . $_GET['clave'] . " required>";
                ?>

                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom02">Nombre categoria</label>
                <?php
                include ("coneccion/conn.php");
                $ejectQuery = mysqli_query($conn, "SELECT nombre_categoria_jarmando FROM categoria_jarmando WHERE id_categoria_jarmando=" . $_GET['clave']);

                while ($row = mysqli_fetch_array($ejectQuery)) {
                    echo "<input type='text' class='form-control' id='validationCustom02' placeholder='nombre' name='nombreP' value=" . $row[0] . " required>";
                }
                ?>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="mb form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1" name="ckMAr">status marca</label>
            </div>
        </div>

        <input class="btn btn-primary" type="submit" value="Ingresar">
        <input class="btn btn-secundary" type="reset" value="Cancelar">
    </form>

</body>

</html>