<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_POST['claveP'])) {
            include ("coneccion/conn.php");
            $status;
            if (isset($_POST['ckMAr'])) {
                $status=1;
            } else {
                $status=0;
            }
            mysqli_query($conn, "CALL ingresarComponentes('".$_POST['claveP']."', '".$_POST['nombreP']."', '".$_POST['descP']."', ".$_POST['precioA'].", ".$_POST['exist'].", ".$_POST['stockMn'].", ".$_POST['stockMx'].", '".$_POST['imputState']."', '".$_POST['imputState1']."',  ".$_POST['desc'].")");         
            echo ("CALL ingresarComponentes('".$_POST['claveP']."', '".$_POST['nombreP']."', '".$_POST['descP']."', ".$_POST['precioA'].", ".$_POST['exist'].", ".$_POST['stockMn'].", ".$_POST['stockMx'].", '".$_POST['imputState']."', '".$_POST['imputState1']."',  ".$_POST['desc'].")");
            echo "<h1>Componente ".$_POST['nombreP']." ingresado con exito</h1> ";
        }
        
    ?>
    
     <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">CLAVE_PRODUCTO</th>
                <th scope="col">NOMBRE_PRODUCTO</th>
                <th scope="col">DESCRIPCION_PRODUCTO</th>
                <th scope="col">PRECIO_ACTUAL_PRODUCTO</th>
                <th scope="col">EXISTENCIA_PRODUCTO</th>
                <th scope="col">STOCK_MINIMO_PRODUCTO</th>
                <th scope="col">STOCK_MAXIMO_PRODUCTO</th>
                <th scope="col">MARCA</th>
                <th scope="col">CATEGORIA</th>
                <th scope="col">DESCUENTO_PRODUCTO</th>
                <th scope="col">Eliminar</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include ("coneccion/conn.php");
                global $conn;
            
                $ejectQuery = mysqli_query($conn, "SELECT * FROM componente_jarmando");
                while ($row = mysqli_fetch_array($ejectQuery)) {
                    echo "
                            <td>".$row[0]."</td>
                            <td>".$row[1]."</td>
                            <td>".$row[2]."</td>
                            <td>".$row[3]."</td>
                            <td>".$row[4]."</td>
                            <td>".$row[5]."</td>
                            <td>".$row[6]."</td>
                            <td>".$row[7]."</td>
                            <td>".$row[8]."</td>
                            <td>".$row[9]."</td>
                            <td><a href='actualizar.php?clave=$row[0]' <i class='fa fa-edit'></i> </td>
                            <td><a href='logn/eliminar.php?clave=$row[0]'><i class='fa fa-trash' title='Eliminar'></i></a></td>
                        </tr>";
                }
            ?>
        </tbody>
    </table> 
</body>
</html>