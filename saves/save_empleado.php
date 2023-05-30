<?php

include('../db.php');

if (isset($_POST['save_task'])) {
    //$idProducto = $_POST['idProducto'];
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $telefono = $_POST['telefono'];
    $estatus = $_POST['estatus'];
    $query = "INSERT INTO empleado (nombre, apellidoP, apellidoM, telefono, estatus) VALUES ('$nombre', '$apellidoP', '$apellidoM', '$telefono',  '$estatus')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed.");
    }

    $_SESSION['message'] = 'Task Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: ../tablas/empleado.php');
}
