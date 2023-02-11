<?php
    // ⚡⚡ HERENCIA ⚡⚡

    class Persona {
        protected $nombre;
        protected $apellido;
        protected $email;
        protected $telefono;

        public function __construct($nombre, $apellido, $email, $telefono)
        {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->email = $email;
            $this->telefono = $telefono;
        }

        public function mostrarInformacion(){
            echo "Nombre: " . $this->nombre . " " . $this->apellido . " Email: " .$this->email;
        }
    }

    class Empleado extends Persona{
        protected $codigo;
        protected $areaTrabajo;

        public function __construct($nombre, $apellido, $email, $telefono, $codigo, $areaTrabajo)
        {
            parent::__construct($nombre, $apellido, $email, $telefono);
            $this->codigo = $codigo;
            $this->areaTrabajo = $areaTrabajo;
        }
    }

    $eduardo = new Persona("Eduardo", "Arroyo", "edu@gmail.com", "963852147");
    echo "<pre>";
    var_dump($eduardo);
    echo "</pre>";
    $eduardo->mostrarInformacion();

    $empleado1 = new Empleado("Jorge", "Salas", "jsalas@gmail.com", "987654321", "0001", "TI");
    echo "<pre>";
    var_dump($empleado1);
    echo "</pre>";
    $empleado1->mostrarInformacion();
?>