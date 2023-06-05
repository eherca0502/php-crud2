<?php include("../db.php"); ?>

<?php include('../includes/header.php'); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="empleado.php">Empleado</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cliente.php">Cliente</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="producto.php">Producto</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="venta.php">Venta</a>
              </li>
              <a href="../inicia.php" class="btn btn-danger">Salir</a>
            </ul>
          </nav>
<!--a href="inicia.php" class="btn btn-danger">Salir</!--a-->
<main class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <!-- MESSAGES -->

            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php session_unset();
            } ?>

            <!-- ADD TASK FORM -->
            <div class="card card-body">
                <form action="../saves/save_proveedor.php" method="POST">
                    <div class="form-group">
                        <p>Nombre</p>
                        <input type="text" name="nombre" class="form-control" placeholder="" autofocus>
                    </div>
                    <div class="form-group">
                        <p>correo</p>
                        <textarea name="apellidoP" rows="2" class="form-control" placeholder=""></textarea>
                    </div>
                    <div hidden class="form-group">
                        <p>Estatus</p>
                        <input name="estatus" type="number" max="1" min="0" rows="2" class="form-control" value="1" placeholder=""></input>
                    </div>

                    <input type="submit" name="save_task" class="btn btn-primary btn-block"  value="Guardar">
                    
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table id="tblData" class="table table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nombre</th>
                        <th>Correo</th>
                        <th>Estatus</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $query = "SELECT * FROM proveedor";
                    $result_tasks = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['correo']; ?></td>
                            <td><?php echo $row['estatus']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-warning">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="../deletes/delete_cliente.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <button class="btn btn-primary" onclick="exportTableToExcel('tblData')">Export Table Data To Excel File</button>
        </div>

    </div>
</main>
<script>
    function exportTableToExcel(tableID, filename = '') {
        var downloadLink;
        var dataType = 'application/vnd.ms-excel';
        var tableSelect = document.getElementById(tableID);
        var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

        // Specify file name
        filename = filename ? filename + '.xls' : 'excel_data.xls';

        // Create download link element
        downloadLink = document.createElement("a");

        document.body.appendChild(downloadLink);

        if (navigator.msSaveOrOpenBlob) {
            var blob = new Blob(['ufeff', tableHTML], {
                type: dataType
            });
            navigator.msSaveOrOpenBlob(blob, filename);
        } else {
            // Create a link to the file
            downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

            // Setting the file name
            downloadLink.download = filename;

            //triggering the function
            downloadLink.click();
        }
    }
</script>
<?php include('../includes/footer.php'); ?>