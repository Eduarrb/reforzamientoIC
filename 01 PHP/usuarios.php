<?php include "DB/conexion.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" integrity="sha512-rt/SrQ4UNIaGfDyEXZtNcyWvQeOq0QLygHluFQcSjaGB04IxWhal71tKuzP6K8eYXYB6vJV4pHkXcmFGGQ1/0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php
        require_once('controllers/usuariosController.php');
        include "views/nav.php";
    ?>
    <div class="row">
        <div class="container">
            <h2 class="text-center text-info">Lista de usuarios</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>correo</th>
                        <th>pass</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        getUsuarios($conexion);
                    ?>
                    <!-- <tr>
                        <td>1</td>
                        <td>Eduardo</td>
                        <td>Arroyo</td>
                        <td>edu@gmail.com</td>
                        <td>123</td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>