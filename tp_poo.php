<?php
/* Exercice 1 - 2 */
class Character {
    public string $name;
    public int $health;
    public int $strength;
    public Stuff $stuff;

    function __construct(string $name, int $health, int $strength) {
        $this->name = $name;
        $this->health = $health;
        $this->strength = $strength;
    }  
    public function loseHealth($value): int
    {
        $this->health -= $value;
        if ($this->health > 0){
            echo "Vous avez perdu " . $value . "pv. Votre total de PV est désormais de " . $this->health . "<br>";
            return $this->health;
        } else {
            echo $this->name . " a été vaincu !<br>";
            return 0;
        }
    }  

    public function attack(character $target){
        if ($this->health > 0){
            echo $this->name . " attaque " . $target->name . " et lui inflige " . $this->strength . " dégâts. Vie restante : " . $target->health . "<br>";
            $target->loseHealth($this->strength);
        }
    }
}

class Orc extends Character { 
    public function __construct(string $name) {
        parent::__construct($name, 100, 12);
    }
    public function hello()
    {
       echo "Nom : " . $this->name . "<br>PV : " . $this->health . "<br>Force : " . $this->strength . "<br>";
    }
}

class Hero extends Character { 
    public function __construct(string $name) {
        parent::__construct($name, 150, 10);
    }
    public function hello()
    {
       echo "Nom : " . $this->name . "<br>PV : " . $this->health . "<br>Force : " . $this->strength . "<br>";
    }
}


class Stuff { 
    public string $head;
    public string $body;
    public string $weapon;
    public function __construct(string $head, string $body, string $weapon) {
        $this->head = $head;
        $this->body = $body;
        $this->weapon = $weapon;
    }
}

$orc = new Orc("Thrall");
$hero = new Hero("Tyrande Murmevent");
$orc->hello();
$hero->hello();
echo $orc->health . "<br>";
$hero->attack($orc);
$orc->attack($hero);
var_dump($orc);
while($hero->health > 0 && $orc->health > 0){
    $orc->attack($hero);
    $hero->attack($orc);
}

?>