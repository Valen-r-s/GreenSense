<?php
if(!empty($_POST["registro"])){
    if (empty($_POST["nombre"]) or empty($_POST["email"]) or empty($_POST["direccion"]) or empty($_POST["telefono"]) or empty($_POST["documento"])) {
        echo '<div class="alerta">Uno de los campos está vacio</div>';
    } else {
        $nombre=$_POST["nombre"];
        $email=$_POST["email"];
        $direccion=$_POST["direccion"];
        $telefono=$_POST["telefono"];
        $documento=$_POST["documento"];
        $sql=$conexion->query("INSERT INTO registro(nombre,mail,direccion,telefono,documento) VALUES('$nombre','$email','$direccion','$telefono','$documento')");
        if ($sql==1) {
            echo '<div class="success">Datos registrados correctamente</div>';
        } else {
            echo '<div class="alerta">Error al guardar los datos</div>';
        }  
    }
}
?>