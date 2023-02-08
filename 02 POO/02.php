<?php
    class Empleado {
        public $nombre;
        public $apellido;
        public $departamento;
        public $email;
        public $codigo;

        // ⚡⚡ CONSTRUCTOR
        public function __construct($nombre, $apellido, $departamento, $email, $codigo)
        {
            // echo 'desde el constructor';
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->departamento = $departamento;
            $this->email = $email;
            $this->codigo = $codigo;
        }
    }

    $eduardo = new Empleado('Eduardo', 'Arroyo', true, 'edu@gmail.com', 'uc001');
    echo "<pre>";
    var_dump($eduardo);
    // print_r($eduardo);
    // echo $eduardo;
    echo "</pre>";


?>