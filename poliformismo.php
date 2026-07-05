<?php

// 1. CLASE PADRE
class Hero {
    protected string $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Acción general
    public function castUltimate() {
        echo "$this->name uses a basic ultimate ability.<br>";
    }
}

// 2. CLASE HIJA 1 (Mago)
class MageHero extends Hero {
    // 💥 REESCRITURA (Polimorfismo): Usamos el MISMO nombre de función que el padre
    public function castUltimate() {
        echo "🔮 $this->name casts Cataclysm! The sky falls!<br>";
    }
}

// 3. CLASE HIJA 2 (Guerrero)
class WarriorHero extends Hero {
    // 💥 REESCRITURA (Polimorfismo): El mismo método, pero acción de guerrero
    public function castUltimate() {
        echo "🪓 $this->name uses Culling Blade! CHOP!<br>";
    }
}

// ==========================================
// PROBAMOS EL POLIMORFISMO
// ==========================================

$hero1 = new MageHero("Invoker");
$hero2 = new WarriorHero("Axe");

// Usamos EXACTAMENTE el mismo comando para los dos
$hero1->castUltimate(); // Imprime el meteorito del mago
$hero2->castUltimate(); // Imprime el hachazo del guerrero

?>