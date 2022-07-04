<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <form class="needs-validation form-compo" action="pocesar-comp.php" method="post">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Clave Producto</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="clave" name="claveP" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Nombre Producto</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="nombre" name="nombreP" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustomUsername">Descripcion Producto</label>
                    <input type="text" class="form-control" id="validationCustom03" placeholder="Descripcion" name="descP" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="validationCustom01">Precio Actual</label>
                    <input type="text" class="form-control" id="validationCustom05" placeholder="precio act" name="precioA" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom01">Excitencia</label>
                    <input type="text" class="form-control" id="validationCustom06" placeholder="existencia" name="exist" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom01">Stock Min</label>
                    <input type="text" class="form-control" id="validationCustom07" placeholder="stock min" name="stockMn" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom01">Stock Max</label>
                    <input type="text" class="form-control" id="validationCustom08" placeholder="stock max" name="stockMx" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    include ("coneccion/conn.php");
                ?>
                <div class="form-group col-md-4">
                    <label for="imputState">MARCA</label>
                    <select name="imputState" class="form-control">
                        <?php
                            $query = "SELECT nombre_marca_jarmando FROM marca_jarmando;";
                            
                            $ejectQuery = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($ejectQuery)) {
                                echo " <option value=\"{$row[0]}\">{$row[0]}</option>";
                            }
                        ?>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="imputState">Categoria</label>
                    <select name="imputState1" class="form-control">
                        <?php
                            $query = "SELECT nombre_categoria_jarmando FROM categoria_jarmando;";
                            $ejectQuery = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($ejectQuery)) {
                                echo " <option value=\"{$row[0]}\">{$row[0]}</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom10">descuento</label>
                    <input type="text" class="form-control" id="validationCustom10" placeholder="descuento" name="desc" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            

            <input class="btn btn-primary" type="submit" value="Ingresar">
            <input class="btn btn-secundary"type="reset" value="Cancelar">
        </form>
    </div>
</body>
</html>