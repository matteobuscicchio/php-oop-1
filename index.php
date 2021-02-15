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

    public function getName(){
        return $this->name;
    }
    public function getsurname(){
        return $this->surname;
    }
    public function getGrade(){
        return $this->grade;
    }
}

$marco = new Developer('Marco', 'Montemagno', 'senior Dev');
$riccardo = new Developer('Riccardo', 'Palombo', 'senior Dev');
$matteo = new Developer('Matteo', 'Buscicchio', 'junior Dev');
$adriano = new Developer('Adriano', 'Santucci', 'junior Dev');
$loredana = new Developer('Loredana', 'Bianchi', 'mid Dev');

$devList = [$marco,$riccardo,$matteo,$adriano,$loredana];
var_dump($devList);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-oop-1</title>
        <style>

            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                background: #1E2D3B;
                min-height: 100vh;
            }

            .container {
                width: 1070px;
                height: 100%;
                margin: 0 auto;
            }

            .dev_container {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
                padding: 100px 0;
            }

            .dev {
                display: flex;
                justify-content: flex-start;
                align-items: center;
                flex-direction: column;
                flex-basis: 200px;
                padding: 20px;
                margin: 10px 20px;
                height: 360px;
                background: rgb(46, 58, 70);
                text-align: center;
            }

            .dev h3 {
                margin: 20px 0;
                color: white;
                font-size: 18px;
                text-transform: uppercase;
            }

            .dev span {
                color: grey;
                font-size: 20px;
            }

        </style>
    </head>
    <body>
        
        <div class="container">
            <div class="dev_container container ">
                
                <?php foreach ($devList as $dev) { ?>
                    <div class="dev">
                        <h3><?php echo $dev->getName(), ' ', $dev->getsurname()?></h3>
                        <span><?php echo $dev->getGrade()?></span>
                    </div>
                <?php };?>

            </div>
        
        </div>

    </body>
</html>