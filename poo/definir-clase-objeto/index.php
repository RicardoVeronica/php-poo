<?php
/* Como iniciar una clase e instanciar un objeto, nivel de acceso a los metodos y atributos */

class ClaseConConstructor {

    function __construct() {
        
    }

}

class ClaseConDestructor {

    function __destruct() {

    }

}

class ClasePadre {
    
    // Varibles de la clase
    var $atributo;
    
    public $atributo_publico;
    
    private $atributo_privado;
    
    protected $atributo_protegido;

    public static $atributo_estatico;


    // Metodos de la clase
    function metodo() {
        // Funcion normal
    }

    public function metodo_publico() {
        /* Funcion que puede ser accedidad desde cualquier parte de la aplicacion */
    }

    private function metodo_privado() {
        /* Funcion que solo puede ser usada en la clase que la definio */
    }

    protected function metodo_protegido() {
        /* Funcion que puede ser accedidad desde su metodo padre y los que la heredan, pero no en otra parte de la aplicacion como las publicas */
    }

    public static function metodo_estatico () {
        /* Puede ser usado sin necesidad de intanciar un objeto que lo contenga y su valor no puede cambiar, no varia */
    }

}

// Instanciando objeto
$objeto = new MiClase();

// Herencia de clase padre a clase hija
class ClaseHija extends ClasePadre {

    /* Esta clase hereda todos los metodos y atributos de la clase padre */

}


/* Interfaces para multiple herencia */
interface InterfaceA {

    public function metodo_publico();

}

interface InterfaceB {

    public function otro_metodo_publico();

}

class NombreClase implements InterfaceA, InterfaceB {

    /* Esta clase implementa todos los metodos de las interfaces invocadas */

}