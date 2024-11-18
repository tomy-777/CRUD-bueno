<?php
if(!empty($_POST["btnmodif"])){
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fdn"]) and !empty($_POST["correo"]))  {
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $dni=$_POST["dni"];
        $fdn=$_POST["fdn"];
        $correo=$_POST["correo"];

        $sql = $conexion->query("UPDATE usuario SET Nombre='$nombre', Apellido='$apellido', DNI='$dni', Nacimiento='$fdn', Email='$correo' WHERE ID=$id");

        if ($sql==1) {
            header(header: "location:index.php");
        } else {
            echo "<div class='alert alert-danger'> Error: el registro no fue modificado </div>";
        }


    } else {
        echo "<div class='alert alert-warning'> Error: al menos un campo está vacío </div>";
    }
    
}