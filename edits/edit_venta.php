<?php
include("../db.php");
$nombre = '';
$descripcion = '';
$precio = '';
$categoria = '';
$estatus = '';

if (isset($_GET['id'])) {
    $idProducto = $_GET['id'];
    $query = "SELECT * FROM venta WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $fecha = $_POST['fecha'];
        $id_cliente = $_POST['id_cliente'];
        $descripcion = $_POST['descripcion'];
        $estatus = $_POST['estatus'];
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $fecha = $_POST['fecha'];
    $id_cliente = $_POST['id_cliente'];
    $descripcion = $_POST['descripcion'];
    $estatus = $_POST['estatus'];

    $query = "UPDATE venta set fecha = '$fecha', id_cliente = '$id_cliente', descripcion = '$descripcion', estatus='$estatus' WHERE id=$id";
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
                        <input name="fecha" type="text" class="form-control" value="<?php echo $fecha; ?>" placeholder="Update Fecha">
                    </div>
                    <div class="form-group">
                        <textarea name="id_cliente" class="form-control" cols="30" rows="10" placeholder="id_cliente"><?php echo $id_cliente; ?></textarea>
                    </div>
                    <div class="form-group">
                        <input name="descripcion" type="text" class="form-control" value="<?php echo $descripcion; ?>" placeholder="Update descripcion">
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