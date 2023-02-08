<?php
    class Empleado {
        public $nombre;
        public $apellido;
        public $departamento;
        public $email;
        public $codigo;

        public function __construct($nombre, $apellido, $departamento, $email, $codigo)
        {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->departamento = $departamento;
            $this->email = $email;
            $this->codigo = $codigo;

            $this->imprimeNombreEmpleado();
        }

        // ⚡⚡ METODOS
        public function imprimeNombreEmpleado(){
            echo $this->nombre . " " . $this->apellido;
        }
    }


    $eduardo = new Empleado('Eduardo', 'Arroyo', 'Alamacen', 'edu@gmail.com', 'uc001');
    echo "<pre>";
    var_dump($eduardo);
    echo "</pre>";

    // $eduardo->imprimeNombreEmpleado();


?>