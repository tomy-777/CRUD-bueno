<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./modelo/css/bootstrap.css">
    <link rel="stylesheet" href="./modelo/css/style.css">

    <title>Document</title>
</head>
<body>
    <div class="container-fluid row">
    <form class="col-4" style="padding: 1rem;" method="post">
        <h3 class="text-center text-secondary">Registro de Usuario</h3>
    <?php
    include "modelo/conexion.php";
    include "controlador/registerController.php";
    ?>

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        
        <div class="mb-3">
            <label class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido">
        </div>

        <div class="mb-3">
            <label class="form-label">DNI</label>
            <input type="text" class="form-control" name="dni">
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="fdn">
        </div>

        <div class="mb-3">
            <label class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" name="correo">
        </div>
        <button type="submit" class="btn btn-primary" name="btnregistro" value="ok">Registrar</button>
        </form>


        <div class="col-8 p-4">
            <table class="table table-light table-striped text-center">
                <thead class="table-danger">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">DNI</th>
                    <th scope="col">F. Nacimiento</th>
                    <th scope="col">Correo</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query("SELECT * FROM usuario");
                    while ($datos = $sql->fetch_object()) { ?>
                    <tr>
                        <td> <?= $datos->ID; ?> </td>
                        <td><?= $datos->Nombre; ?></td>
                        <td><?= $datos->Apellido; ?></td>
                        <td><?= $datos->DNI; ?></td>
                        <td><?= $datos->Nacimiento; ?></td>
                        <td><?= $datos->Email; ?></td>
                        <td>
                            <a href="" class="btn btn-small btn-info"><i class="bi bi-pencil-square"></i></a>
                            <a href="" class="btn btn-small btn-danger"><i class="bi bi-x-circle-fill style="></i></a>
                        </td>
                    </tr>
                    <?php }
                    ?>
                
                </tbody>
            </table>
        </div>
    </div>

        

<script src="./modelo/js/bootstrap.js"></script>
</body>
</html>