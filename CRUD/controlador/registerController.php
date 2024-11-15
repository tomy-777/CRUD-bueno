<?php

if(!empty($_POST["btnregistro"])){
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fdn"]) and !empty($_POST["correo"]))  {
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $dni=$_POST["dni"];
        $fdn=$_POST["fdn"];
        $correo=$_POST["correo"];

        $sql = $conexion->query("INSERT INTO usuario(Nombre,Apellido,DNI,Nacimiento,Email) VALUES('$nombre','$apellido','$dni','$fdn','$correo')");

        if ($sql==1) {
            echo "<div class='alert alert-success'> Usuario Registrado </div>";
        } else {
            echo "<div class='alert alert-danger'> Error: el usuario no fue registrado </div>";
        }


    } else {
        echo "<div class='alert alert-danger'> Error: al menos un campo está vacío </div>";
    }
    
}