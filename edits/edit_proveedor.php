<?php
include("../db.php");
$nombre = '';
$correo = '';
$estatus = '';

if (isset($_GET['id'])) {
    $idProducto = $_GET['id'];
    $query = "SELECT * FROM proveedor WHERE proveedor=$idProducto";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre = $_POST['nombre'];;
        $correo = $_POST['correo'];
        $estatus = $_POST['estatus'];
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];;
    $correo = $_POST['correo'];
    $estatus = $_POST['estatus'];

    $query = "UPDATE proveedor set nombre = '$nombre', correo='$correo', estatus='$estatus' WHERE id=$id";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Task Updated Successfully';
    $_SESSION['message_type'] = 'warning';
    header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Update Nombre">
                    </div>
                    <div class="form-group">
                        <textarea name="correo" class="form-control" cols="30" rows="10" placeholder="Descripcion"><?php echo $descripcion; ?></textarea>
                    </div>
                    <div class="form-group">
                        <input name="estatus" type="number" max="1" min="0" class="form-control" value="<?php echo $estatus; ?>" placeholder="Update Estatus">
                    </div>
                    <button class="btn-success" name="update">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('../includes/footer.php'); ?>