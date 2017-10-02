<?php
// Definiendo un objeto perro

class Perro {

    // Atributos
    public $nombre;

    public $raza;
    
    public $edad;
    
    public $genero;
    
    public $adiestrado;
    
    public $foto;
    
    public $comida;


    // Metodos
    public function __construct($nombre, $raza, $edad, $genero, $adiestrado, $foto, $pulgoso) {

        echo '<mark>Constructor del la clase</mark>';

        $this -> nombre = $nombre;
    
        $this -> raza = $raza;
    
        $this -> edad = $edad . ' Años';
    
        $this -> genero = ($genero) ? 'Macho':'Hembra';
    
        $this -> adiestrado = ($adiestrado) ? 'Entrenado':'No esta entrenado';
    
        $this -> foto = $foto;

        $this -> pulgoso = ($pulgoso) ? 'Tiene pulgas':'No tiene pulgas';

    }

    public function ladrar() {

        echo '<p><b>Hola soy un perro, guau, guau</b></p>';
    
    }

    public function comer($comida) {

        $this -> comida = $comida;

        echo '<p>' . $this -> nombre . ' Come ' . $this -> comida . '</p>';

    }

    public function aparecer() {

        // Etiquetas con atributos en html
        // Referencia al objeto dentro de la clase
        echo '<img src="' . $this -> foto . '">';

    }

    public function __destruct() {

        echo '<p><mark>Destructor del la clase</mark></p>';

    }


}


// Instancia de objeto
$blade = new Perro('Blade el perro', 'Maltes', 6, true, true,'http://www.mascotadomestica.com/wp-content/uploads//2013/02/bichon-maltes-mini.jpg', false);


// Funcion para mostrar informacion de expresiones
var_dump($blade);


// Ejecutar funcines de la clase
$blade -> ladrar();

$blade -> comer('Hueso de carnaza');

$blade -> aparecer();


// Imprimir en pantalla con etiquetas html
echo '<h1>' . $blade -> nombre . '</h1>';

echo '<h3>Raza: ' . $blade -> raza . '</h3>';

echo '<h3>Edad: ' . $blade -> edad . ' años</h3>';
