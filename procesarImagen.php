<?php

session_start();
$folio = $_GET['folio'];

include("proyectoP/coneccion/conn.php");

?>
<form name="MiForm" id="MiForm" method="post" action="procesarImagen.php?folio=<?php echo $folio?>" enctype="multipart/form-data" >
    <h4 class="text-center">Seleccione imagen a cargar</h4>
    <div class="form-group">
        <label class="col-sm-2 control-label">Archivos</label>
        <div class="col-sm-8">
            <input type="file" class="form-control" id="image" name="image" multiple>
        </div>
        <button name="submit" class="btn btn-primary">Cargar Imagen</button>
    </div>
</form>
<?php

if(isset($_POST["submit"])){
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
        
        //Insertar imagen en la base de datos
        $insertar = $conn->query("UPDATE componente_jarmando c set c.imagen ='$imgContenido' WHERE c.clave_componente_jarmando='$folio'");
        // COndicional para verificar la subida del fichero
        if($insertar){
            echo "Archivo Subido Correctamente.";
        }else{
            echo "Ha fallado la subida, reintente nuevamente.";
        } 
        // Sie el usuario no selecciona ninguna imagen
    }else{
        echo "Por favor seleccione imagen a subir.";
    }
}


/*
$queryP = "call carritop ('" . $_SESSION['usuario'] . "', '" . $folio . "')";
echo $queryP;
$exeqQuery = mysqli_query($conn, $queryP);
$tabla = mysqli_fetch_array($exeqQuery);
if ($tabla[0] == "exito") {
    header("location:categorias.php?clave=" . $v . "&stat=exito");
} else {
    header("location:categorias.php?clave=" . $v . "&stat=fail");
}*/
?>