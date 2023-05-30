<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>
<!--a href="inicia.php" class="btn btn-danger">Salir</!--a-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="tablas/empleado.php">Empleado</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tablas/cliente.php">Cliente</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tablas/producto.php">Producto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tablas/proveedor.php">Proveedor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tablas/venta.php">Venta</a>
              </li>
            </ul>
          </nav>
<?php include('includes/footer.php'); ?>