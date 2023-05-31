<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>
<!--a href="inicia.php" class="btn btn-danger">Salir</!--a-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="tablas/empleado.php">Empleados</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tablas/cliente.php">Clientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tablas/producto.php">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tablas/proveedor.php">Proveedores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tablas/venta.php">Ventas</a>
              </li>
            </ul>
          </nav>
<?php include('includes/footer.php'); ?>