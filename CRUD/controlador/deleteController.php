<?php 
if (!empty($_GET['id'])) {
    $id=$_GET['id'];

    $sql=$conexion->query("DELETE FROM usuario WHERE ID=$id");
    if ($sql==1) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'> <i class='bi bi-check-circle-fill'></i>
                El registro con la ID '$id' fue eliminado con éxito
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
    } else {
        echo "Error al eliminar";
    }
    
}
?>