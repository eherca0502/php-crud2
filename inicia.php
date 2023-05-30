<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP-->

    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <form action="php/login_usuario_be.php" method="post">
                <div class="form-group">
                    <p>Nombre</p>
                    <input type="text" name="nombreU" id="nombreU">
                </div>
                <div class="form-group">
                    <p>Contraseña</p>
                    <input type="password" name="password" id="password">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="" id="">
                </div>
                <a href="crea.php">Crea Una Cuenta</a>
        </div>
        </form>

    </div>






</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<?php include('includes/footer.php'); ?>