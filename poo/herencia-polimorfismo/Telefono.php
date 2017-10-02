<?php
// Ejercicio de Herencia y Polimorfismo


class Telefono {

    // Atributos publicos
    public $marca;

    public $modelo;

    // Atributos protegidos
    protected $alambrico = true;

    protected $comunicacion;


    // Constructor
    public function __constuct($marca, $modelo) {

        $this -> marca = $marca;

        $this -> modelo = $modelo;

        $this -> comunicacion = ($this -> alambrico) ? 'Telefono alambrico':'Telefono Inalambrico';

    }

    // Metodos publicos
    public function llamar() {
        
        return print('<p>Riiing, Riiiiiiing, Riiiiiiiiing!!</p>');  

    }

    public function obtener_info() {
        
        return print('<ul>
            <li>Marca: ' . $this -> marca . '</li>
            <li>Modelo: ' . $this -> modelo . '</li>
            <li>Metodo de comunicacion: ' . $this -> comunicacion . '</li>
        </ul>');

    }

}

class Celular extends Telefono {

    protected $alambrico = false;

    public function __construct($marca, $modelo) {

        parent::__construct($marca, $modelo);

    }

}

// Clase final ya no puede ser heredada
final class SmartPhone extends Celular {

    public $alambrico = false;

    public $internet = true;

    public function __construct($marca, $modelo) {

        parent::__construct($modelo, $marca);

    }

    # Polimorfismo, agregar un li a la funcion
    public function obtener_info() {
        
        return print('<ul>
            <li>Marca: ' . $this -> marca . '</li>
            <li>Modelo: ' . $this -> modelo . '</li>
            <li>Acceso a internet: ' . $this -> internet . '</li>
            <li>Metodo de comunicacion: ' . $this -> comunicacion . '</li>
        </ul>');

    }

}


echo('<h1>Evolucion del telefono</h1>');


echo('<h3>Telefono:</h3>');

$tel_home = new Telefono('Radioshack', 'RT-30Plus');

$tel_home -> llamar();

$tel_home -> obtener_info();


echo('<h3>Celular:</h3>');

$cel = new Celular('LG', 'T-144');

$cel -> llamar();

$cel -> obtener_info();


echo('<h3>Smart Phone:</h3>');

$smart = new SmartPhone('Motorola', 'G4');

$smart -> llamar();

$smart -> obtener_info();


/*
* TODO:
* No imprime los atributos desde la clase Telefono
* No reconoce los constructores heredados
*/
