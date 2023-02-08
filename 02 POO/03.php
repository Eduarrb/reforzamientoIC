<?php
    class Empleado {
        public $nombre;
        public $apellido;
        public $departamento;
        public $email;
        public $codigo;

        // TIPADO
        public function __construct(string $nombre, string $apellido, string $departamento, string $email, int $codigo)
        {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->departamento = $departamento;
            $this->email = $email;
            $this->codigo = $codigo;
        }
    }

    $eduardo = new Empleado('Eduardo', 'Arroyo', 'TI', 'edu@gmail.com', 789);
    echo "<pre>";
    var_dump($eduardo);
    echo "</pre>";


?>