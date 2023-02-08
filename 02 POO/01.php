<?php
    /*
        ## POO

        Forma de programar (paradigma) que prioriza la creación de Clases y Objetos en lugar de funciones

        Esto nos dira cual es la forma y atributos que tendran los datos (Objeto)

        Nos ordena el codigo DONT REPEAT YOURSELF

        Tiene abstraccion, Encapsulación, herencia y polimorfismo

        automovil{
            cantiEspejos,
            marca,
            color,
            tipoLuces,
            cantiLuces,
            modelo
        }
    */
    

    class Empleado {
        // declarar atributos
        // modificadores de acceso public, protected, private
        public $nombre;
        public $apellido;
        public $departamento;
        public $email;
        public $codigo;
    }

    // ⚡⚡ INSTANCIAR UNA CLASE
    $eduardo = new Empleado;
    echo "<pre>";
    var_dump($eduardo);
    echo "</pre>";

    $eduardo->nombre = "Eduardo";
    $eduardo->apellido = true;
    $eduardo->departamento = 'TI';


    echo "<pre>";
    var_dump($eduardo);
    echo "</pre>";

?>