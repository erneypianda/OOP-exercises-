<?php

// ==========================================
// 1. CLASE PADRE: El molde genérico
// ==========================================
class Hero {
    // Atributos protegidos: las hijas PUEDEN usarlos, pero el exterior NO
    protected string $name;
    protected int $level;

    // Constructor del padre
    public function __construct($name, $level = 1) {
        $this->name = $name;
        $this->level = $level;
    }

    // Método para comprobar si es nivel alto (Devuelve un TICKET)
    public function isHighLevel() {
        if ($this->level >= 20) {
            return true;
        } else {
            return false;
        }
    }
}

// ==========================================
// 2. CLASE HIJA: Hereda del padre y añade sus cosas
// ==========================================
class MageHero extends Hero {
    // Atributo único de esta clase hija
    private int $mana;

    // Constructor de la hija (Pide los datos del padre + el suyo propio)
    public function __construct($name, $level, $mana) {
        // Ejecutamos el constructor del padre para que guarde el nombre y nivel
        parent::__construct($name, $level);
        
        // Guardamos el atributo único de la hija
        $this->mana = $mana;
    }

    // Método para mostrar toda la ficha en pantalla
    public function displayCharacter() {
        echo "--- HERO STATS ---<br>";
        echo "Name: " . $this->name . "<br>";
        echo "Mana: " . $this->mana . " points<br>";
        
        // Usamos el método heredado del padre para decidir qué imprimir
        if ($this->isHighLevel() == true) {
            echo "Level: " . $this->level . " (Veteran Hero)⚔️<br><br>";
        } else {
            echo "Level: " . $this->level . " (Learning Hero)🌱<br><br>";
        }
    }
}

// ==========================================
// 3. PRUEBA REAL EN EL NAVEGADOR
// ==========================================

// Creamos un mago de nivel bajo
$wizard1 = new MageHero("Invoker", 12, 450);
$wizard1->displayCharacter();

// Creamos un mago de nivel alto
$wizard2 = new MageHero("Crystal Maiden", 25, 600);
$wizard2->displayCharacter();

?>