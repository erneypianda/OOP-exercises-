<?php

class Libro {

    private string $titulo;
    private string $autor;
    private int $anio;
    private bool $prestado;


    function __construct($titulo, $autor, $anio) {

        $anioActual = date("Y");

        if ($anio > $anioActual) {
            die("Error: No se permiten años futuros");
        }

        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anio = $anio;
        $this->prestado = false;
    }


    function __destruct() {
        echo "El libro '" . $this->titulo . "' ha sido eliminado de la memoria";
    }


    public function esAntiguo() {
        $anioActual = date("Y");
        if(($anioActual - $this->anio)>20){
            return true;
        } else {
            return false;
        }
    }


        public function prestar() {

    if ($this->prestado == false) {
        $this->prestado = true;
        echo "Libro prestado correctamente.<br>";
    } else {
        echo "El libro ya estaba prestado.<br>";
    }
}

public function devolver() {
    if ($this->prestado == true) {
        $this->prestado = false;
        echo "Libro devuelto correctamente.<br>";
    } else {
        echo "El libro no estaba prestado.<br>";
    }
}
public function mostrarInfo() {
    echo "Título: " . $this->titulo . "<br>";
    echo "Autor: " . $this->autor . "<br>";
    echo "Año: " . $this->anio . "<br>";

    if ($this->prestado == true) {
        echo "Estado: Prestado<br>";
    } else {
        echo "Estado: Disponible<br>";
    }

    if ($this->esAntiguo()) {
        echo "Antigüedad: Libro antiguo<br><br>";
    } else{
        echo "antiguedad libro reciente <br>";
        echo "<p> Hola</p>";
    }
}

}

?>

