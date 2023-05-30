<?php

include('../db.php');

if (isset($_POST['save_task'])) {
    //$idProducto = $_POST['idProducto'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $estatus = $_POST['estatus'];
    $query = "INSERT INTO proveedor (nombre, correo, estatus) VALUES ('$nombre', '$correo' , '$estatus')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed.");
    }

    $_SESSION['message'] = 'Task Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: ../tablas/proveedor.php');
}