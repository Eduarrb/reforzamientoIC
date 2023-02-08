<?php
    include "models/UsuarioModel.php";

    function postUsuario($con){
        if(isset($_POST['guardar'])){
            // echo 'funcionaaaaaaaaa';
            $nombres = $_POST['name'];
            // echo $nombres;
            $apellidos = $_POST['apellidos'];
            $email = $_POST['email'];
            $pass = $_POST['password'];

            crearUsuario($nombres, $apellidos, $email, $pass, $con);

            header("Location: index.php");
        }
    }

    function getUsuarios($con){
        $query = "SELECT * FROM usuarios";
        $queryRes = mysqli_query($con, $query);

        // print_r($queryRes);

        // while(false){
        //     // es un bucle
        //     c++
        // }

        while($fila = mysqli_fetch_array($queryRes)){
            // print_r($fila);
            $usuario = <<<DELIMITADOR
                <tr>
                    <td>{$fila['id']}</td>
                    <td>{$fila['nombres']}</td>
                    <td>{$fila['apellidos']}</td>
                    <td>{$fila['email']}</td>
                    <td>{$fila['password']}</td>
                </tr>
DELIMITADOR;
            echo $usuario;
        }
    }

?>