<?php
    function crearUsuario($nombres, $apellidos, $email, $pass, $con){
        $query = "INSERT INTO usuarios (nombres, apellidos, email, password) VALUES ('{$nombres}', '{$apellidos}', '{$email}', '{$pass}')";
        mysqli_query($con, $query);
    }

?>