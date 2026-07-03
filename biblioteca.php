<?php
class Persona {
private string $nombre;
private int $edad;
private string $dni;

public function __construct($nombre = "" , $edad = "", $dni = ""){

$this->nombre = $nombre;
$this->edad = $edad;
$this->dni = $dni;

}
public function esMayorDeEdad(){
    if($this->edad >=18){
        return true;

    } else {
        return false;
    }
}
public function Mostrar(){
    echo "<p> Nombre del jugador . $this->nombre .</p>";
    if($this->esMayorDeEdad()==true){
        echo "<p> Edad: .$this->edad. mayor de edad</p>";
    } else{
        echo "<p> Edad . $this->edad . menor de edad</p>";
    }
    echo "DNI: .$this->dni.";
}

}
$persona1 = new Persona("carlos", "15" ,"2445451756");
$persona1-> mostrar();
?>