<?php 
include "modelo/conexion.php";
$id = $_GET["id"];
$sql = $conexion->query("SELECT * FROM usuario WHERE ID=$id") 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modelo/css/style.css">
    <link rel="stylesheet" href="modelo/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<form class="col-4 m-auto" style="padding: 1rem;" method="post">
        <h3 class="text-center text-white bg-warning p-4">Modificación de Usuario [ID: <?= $id ?>]</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
        include "controlador/modificarController.php";
        while ($datos=$sql->fetch_object()){?>
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="inputEditar" value="<?= $datos->Nombre ?>">
        </div>
        
        <div class="mb-3">
            <label class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="inputEditar" value="<?= $datos->Apellido?>">
        </div>

        <div class="mb-3">
            <label class="form-label">DNI</label>
            <input type="text" class="form-control" name="dni" id="inputEditar" value="<?= $datos->DNI?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="fdn" id="inputEditar" value="<?= $datos->Nacimiento?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" name="correo" id="inputEditar" value="<?= $datos->Email ?>">
        </div>
        <?php }


        ?>

        <button type="submit" class="btn btn-warning" name="btnmodif" value="ok">Modificar</button>
        </form>
        <script src="modelo/js/bootstrap.js"></script>
</body>
</html>