<?php

class GamingDevice {
    protected string $brand;
    
    public function __construct($brand) {
        $this->brand = $brand;
    }
    
    public function connect(){
        echo "Connecting device $this->brand <br>";
    } // <-- Eliminado el paréntesis fantasma de aquí abajo
}

class MouseDevice extends GamingDevice {
    public function connect(){
        echo "🖱️ Mouse connected. RGB Lights ON at 1000Hz!<br>";
    }
}

class MonitorDevice extends GamingDevice {
    public function connect(){
        // Añadido el punto y coma (;) al final de esta línea
        echo "🖥️ $this->brand Ultrawide Monitor connected. Resolution set to 21:9!<br>";
    }
}

// PRUEBA REAL
$mymouse = new MouseDevice("Logitech");
$mymouse->connect();

$mymonitor = new MonitorDevice("ASUS ROG");
$mymonitor->connect();

?>