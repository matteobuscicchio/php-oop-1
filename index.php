<?php

// Create una classe per descrivere un entitá, 
// assegnatele degli attributi, utilizzate il constructor. 
// Create alcune istanze della classe. 
// Stampate a schermo gli attributi di ogni istanza.

/**
 * @author Matteo
 * @copyright boolean Ltd
 */
class Developer {
    public $name;
    public $surname;
    public $grade;

    public function __construct(string $name, string $surname, string $grade){
        $this->name = $name;
        $this->surname = $surname;
        $this->grade = $grade;
    }
}

$marco = new Developer('Marco', 'Montemagno', 'senior Dev');
$riccardo = new Developer('Riccardo', 'Palombo', 'senior Dev');
$matteo = new Developer('Matteo', 'Buscicchio', 'junior Dev');
$adriano = new Developer('Adriano', 'Santucci', 'junior Dev');
$loredana = new Developer('Loredana', 'Bianchi', 'mid Dev');

$devList = [$marco,$riccardo,$matteo,$adriano,$loredana];
var_dump($devList);
