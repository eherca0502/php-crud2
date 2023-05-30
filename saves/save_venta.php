<?php

include('../db.php');

if (isset($_POST['save_task'])) {
    //$idProducto = $_POST['idProducto'];
    $fecha = $_POST['fecha'];
    $id_cliente = $_POST['id_cliente'];
    $descripcion = $_POST['descripcion'];
    $estatus = $_POST['estatus'];
    $query = "INSERT INTO venta (fecha, id_cliente, descripcion, estatus) VALUES ('$fecha', '$id_cliente', '$descripcion', '$estatus')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed.");
    }

    $_SESSION['message'] = 'Task Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: ../tablas/venta.php');
}
