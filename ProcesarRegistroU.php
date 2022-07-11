<?php

try {
    $query = $this->dbh;

    $query->beginTransaction();

    //Actualizamos la primera tabla
    $sql = "UPDATE tipoproducto SET tipoProducto = '" . $tipoProducto . "' , imgCategoria = '" . $imgCategoria . "' WHERE idTipo = '" . $idTipo . "'";

    $stmt = $query->prepare($sql);
    $stmt->execute(array(
        ':idTipo' => $idTipo,
        ':tipoProducto' => $tipoProducto,
        ':imgCategoria' => $imgCategoria
    )
    );

    //Actualizamos la segunda
    $sql = "UPDATE productos SET tipoProducto = '$tipoProducto' WHERE idTipo = '$idTipo'";
    $stmt = $query->prepare($sql);
    $stmt->execute(array(
        ':idTipo' => $idTipo,
        ':tipoProducto' => $tipoProducto
    )
    );
    //Si todo ha ido bien, hacemos un commit.
    $query->commit();
}
catch (Exception $e) {
    $query->rollBack();
// $e->getMessage();
// exit($e);
//Si ha habido error, se deshacen cambios.

}
?>