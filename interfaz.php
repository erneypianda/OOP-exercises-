<?php

// 1. DECLARAMOS LA INTERFAZ (El contrato de comportamiento)
interface ActivableSkill {
    // Solo el nombre de la función. Sin llaves {}, termina en ";"
    public function cast();
}

// 2. UNA CLASE DE UNA FAMILIA (Héroe)
class MageHero {
    private string $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Un método normal de su clase
    public function walk() {
        echo "$this->name is walking...<br>";
    }
}

// 3. OTRA CLASE QUE IMPLEMENTA LA INTERFAZ (Corta la distancia)
// Usamos 'implements' para firmar el contrato
class ItemBlackKingBar implements ActivableSkill {
    private string $name;
    public function __construct($name){
        this->name = $name;
    }
    
    // OBLIGATORIO: Tiene que programar la función cast() de la interfaz
    public function cast() {
        echo "🛡️ BKB Activated! Immune to magic for 6 seconds!<br>";
    }
}

// 4. OTRA CLASE DE OTRA FAMILIA COMPLETAMENTE DISTINTA
class NeutralMonster implements ActivableSkill {
          private string $name;
    public function __construct($name){
        this->name = $name;
    // También firma el contrato, pero su cast() hace algo diferente
    public function cast() {
        echo "💥 Centaur Stomps the ground! Everyone stunned!<br>";
    }
}

// ==========================================
// PRUEBA REAL
// ==========================================

$bkb = new ItemBlackKingBar();
$bkb->cast(); // Ejecuta el escudo

$centaur = new NeutralMonster();
$centaur->cast(); // Ejecuta el pisoteo

?>