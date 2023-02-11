<?php
    class Empleado {
        // ⚡⚡ MODIFICADORES DE ACCESO
        // public, protected
        // public: puedes acceder a sus valores desde la clase o desde la instancia y modificarlos tambien desde la clase o la instancia
        // el programa es mas abierto

        public $nombre;
        public $apellido;

        // protected: el acceso solo es desde la clase
        protected $departamento;
        public $email;
        public $codigo;

        public function __construct($nombre, $apellido, $departamento, $email, $codigo)
        {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->departamento = $departamento;
            $this->email = $email;
            $this->codigo = $codigo;
        }

        public function imprimeNombreEmpleado(){
            echo $this->nombre . " " . $this->apellido;
        }
        public function cambiarApellido($apellido){
            echo 'desde el metodo: ';
            $this->apellido = $apellido;
        }

        public function imprimeDepartamento(){
            echo $this->departamento;
        }

        public function cambiarDepartamento($dep){
            $this->departamento = $dep;
        }
    }

    $eduardo = new Empleado('Eduardo', 'Arroyo', 'Almacen', 'edu@gmail.com', 'uc001');
    echo "<pre>";
    var_dump($eduardo);
    echo "</pre>";

    $eduardo->cambiarApellido('Gutierres');
    echo $eduardo->apellido;
    echo "<br>";
    $eduardo->apellido = 'Salas';
    echo $eduardo->apellido;

    echo "<br>";
    // $eduardo->departamento = 'contabilidad';
    $eduardo->imprimeDepartamento();
    $eduardo->cambiarDepartamento('Contabilidad');
    echo "<br>";
    $eduardo->imprimeDepartamento();
?>