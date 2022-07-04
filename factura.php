<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="style/stilo_aboisai.css">-->
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.css">
    <!--<link rel="stylesheet" href="style/style.css">-->
    <title>Document</title>
</head>

<body>

    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid .mb-6">
            <a class="navbar-brand " href="#">Presupuestos para Tu PC </a>
        </div>
    </nav>

    <div class="carrostylo">
        <h2 style="text-align: center; justify-content: center;">factura</h2>
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
                $ejectQuery = mysqli_query($conn, "CALL mostarcarrito()");
                $i = 1;
                while ($row = mysqli_fetch_array($ejectQuery)) {


                    echo "<tr>
                            <td>" . $i . "</td>
                            <td>" . $row[1] . "</td>
                            <td>" . $row[2] . "</td>
                            <td>" . $row[3] . "</td>
                            <td>s</td>";

                    echo "</tr>\n";
                    $i++;
                }
                $i = 1;
                ?>
            </tbody>
        </table>
    </div>
    <!--Footer-->
    <footer>
        <p class="copyright">
            Arma tu gabinete y compra tu mejor laptop gamer con nosotos , confinza y grantia Llamanos al telefo 0180055902 y aparta tu pc gamer Siguenos en todas nuestra Redes sociales Facebook Twiter
        </p>
    </footer>

</body>

</html>