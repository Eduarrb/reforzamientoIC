<?php
    class Empleado {
        public function __construct(
            public $nombre, 
            public $apellido, 
            public $departamento, 
            public $email, 
            public $codigo){}
    }

    $eduardo = new Empleado('Eduardo', 'Arroyo', 'TI', 'edu@gmail.com', 789);
    echo "<pre>";
    var_dump($eduardo);
    echo "</pre>";

    $mayus = "MAYUSCULA";
    echo $mayus;
    $minusculas = strtolower($mayus);
    echo '<br>';
    echo $minusculas;
?>