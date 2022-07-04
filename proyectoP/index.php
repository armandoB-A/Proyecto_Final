<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="bd-example">
        <div class="row">
            <div class="col-3">
                <div id="list-example" class="list-group">
                    <?php
                        include ("coneccion/conn.php");
                        $ejectQuery = mysqli_query($conn, "SELECT nombre_categoria_jarmando FROM categoria_jarmando");
                        $v=-1;
                        if (isset($_GET['clave'])) {
                            $v=$_GET['clave'];
                        }
                        $i=0;
                        $categ="";
                        while ($row = mysqli_fetch_array($ejectQuery)) {
                            if ($i==$v) {
                                echo "<a class='list-group-item list-group-item-action active' href='index.php?clave=".$i."' _msthash='297375' _msttexthash='50518'>".$row[0]."</a>";    
                                $categ=$row[0];
                            }else {
                                echo "<a class='list-group-item list-group-item-action ' href='index.php?clave=".$i."' _msthash='297375' _msttexthash='50518'>".$row[0]."</a>";    
                            }
                            $i++;
                        }
                    ?>
                    <a class="list-group-item list-group-item-action" href="ingresarMarcas.php" _msthash="297375" _msttexthash="50518">Ingresar Marcas</a>
                    <a class="list-group-item list-group-item-action" href="pocesar-marc.php" _msthash="297492" _msttexthash="50661">Mostrar marcas</a>
                    <a class="list-group-item list-group-item-action" href="ingresarCategrias.php" _msthash="297375" _msttexthash="50518">Ingresar categorias</a>
                    <a class="list-group-item list-group-item-action" href="pocesar-cat.php" _msthash="297492" _msttexthash="50661">Mostrar categorias</a>
                    <a class="list-group-item list-group-item-action" href="IngresarComponentes.php" _msthash="297492" _msttexthash="50661">Ingresar Componentes</a>
                    <a class="list-group-item list-group-item-action" href="pocesar-comp.php" _msthash="297492" _msttexthash="50661">Mostrar Componentes</a>

                </div>
            </div>
            <div class="col-9">
                <div id="conti" class="conenedor-imagenes" >
                    <?php
                        include ("coneccion/conn.php");
                        if ($categ=="") {
                            $sql="";
                        }else {
                            $sql=" WHERE id_categoria_jarmando = (SELECT id_categoria_jarmando FROM categoria_jarmando WHERE nombre_categoria_jarmando='".$categ."' )";
                        }
                        $ejectQuery = mysqli_query($conn, "SELECT nombre_componente_jarmando,descripcion_componente_jarmando, precio_actual_componente_jarmando FROM componente_jarmando ".$sql.";");
                        while ($row = mysqli_fetch_array($ejectQuery)) {
                            echo "
                            <div class='card' style='width: 18rem;'>
                                <img src='...' class='card-img-top' alt='...'>
                                <div class='card-body'>
                                    <h5 class='card-title'>".$row[0]."</h5>
                                    <p class='card-text'>".$row[1]."</p>
                                    <a href='#' class='btn btn-primary'>$".$row[2]."</a>
                                </div>
                            </div>
                            ";
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>

</body>
</html>