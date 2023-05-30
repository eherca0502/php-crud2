<?php

include('../db.php');

if (isset($_POST['save_task'])) {
    //$idProducto = $_POST['idProducto'];
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $estatus = $_POST['estatus'];
    $query = "INSERT INTO cliente (nombre, apellidoP, apellidoM, telefono, correo, estatus) VALUES ('$nombre', '$apellidoP', '$apellidoM', '$telefono', '$correo' , '$estatus')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed.");
    }

    $_SESSION['message'] = 'Task Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: ../tablas/cliente.php');
}
