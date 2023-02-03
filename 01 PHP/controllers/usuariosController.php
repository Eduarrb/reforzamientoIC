<?php
    function postUsuario($con){
        if(isset($_POST['guardar'])){
            // echo 'funcionaaaaaaaaa';
            $nombres = $_POST['name'];
            // echo $nombres;
            $apellidos = $_POST['apellidos'];
            $email = $_POST['email'];
            $pass = $_POST['password'];

            $num = "1";
            

            $query = "INSERT INTO usuarios (nombres, apellidos, email, password) VALUES ('{$nombres}', '{$apellidos}', '{$email}', '{$pass}')";
            $query_res = mysqli_query($con, $query);
        }
    }

?>