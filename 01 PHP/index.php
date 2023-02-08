<?php include "DB/conexion.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" integrity="sha512-rt/SrQ4UNIaGfDyEXZtNcyWvQeOq0QLygHluFQcSjaGB04IxWhal71tKuzP6K8eYXYB6vJV4pHkXcmFGGQ1/0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php
        require_once('controllers/formController.php');
        require_once('controllers/usuariosController.php');
    ?>
    <?php
        include "views/nav.php";
    ?>
    <div class="row">
        <div class="container">
            <h1 class="text-center">Ingresar Usuario</h1>
            <?php
                // include('views/formUserView.php');
                cargarFormulario();
                postUsuario($conexion);

                // INDICES   0       1      2   3          4
                //                                    0     1
                // $array1 = ['joshi', 'ryo', 12, true, [12, '1980']];
                // // echo $array1[3];
                // // define('nombre1','juancito');
                // // echo nombre1;
                // // echo '<br>';

                // // EL SIGNO IGUAL = TIENE LA FUNCIONALIDAD DE ASIGNACION 
                // $fullName = 'Eduardo arroyo';

                // // SIGNOS DE COMPARACION
                // /*
                //     <
                //     <=
                //     >
                //     <=
                //     ==
                // */
                // // 1 == 1

                // // echo $fullName;
                // $fullName = "Eduardo Arroyo Bahamonde";
                // $num = 10.5;
                // $bool = false;
                // echo '<br>';
                // // echo $fullName;
                // // define('nombre1', 'pepito');
                // // print_r($array1[4]);
                // echo '<br>';
                // // array asosiativo
                // // key - value pair
                // $array2 = ['nombre' => 'Eduardo', 'apellido' => 'Arroyo'];

                // // print_r($array2);
                // echo '<br>';
                // // print_r($array2);
                // echo $array2['nombre'];
            ?>
        </div>
    </div>
</body>
</html>