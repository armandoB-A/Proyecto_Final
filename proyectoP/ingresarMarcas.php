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
    <div class="formulario_marcas">
        <form class="needs-validation" action="pocesar-marc.php" method="post">
            <h1>MARCAS</h1>
            <div class="form-row">
                <div class="col-3"></div>
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">Nombre de la marca</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Usuario" name="txtMarca">
                </div>
                <div class="col-3"></div>
                <div class="col-3"></div>
                <div class="mb-6 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1" name="ckMAr">status marca</label>
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col-3"></div>
                <div class="col-3">
                    <button name="btnIniciar" type="submit" class="btn btn-danger">Ingresar Marcas</button>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>