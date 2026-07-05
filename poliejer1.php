<?php
 class DotaHero {

 protected string $name;

 public function __construct($name) {
    $this->name =$name;
 }
 public function attack(){
    echo " $this->name performs a basic attack";
 }

 }
 class MeleHero  extends DotaHero{
    public function  attack(){
        echo "🪓 $this->name with a heavy melee weapon! CHOP!<br>";
    }

    }
    class RangeHero  extends DotaHero {
        public function attack(){
            echo "🔮 $this->name fires a magical ranged projectile from afar!";
        }
    }
$hero1 = new MeleHero("Axe");
$hero2 = new RangeHero("Invoker");


$hero1->attack();  
$hero2->attack();


?>