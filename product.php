<?php

    class producto {
        protected string $name;
        protected float $price;

        public function __construct($name ,$price ){
        $this->name = $name;
        $this->price = $price;

    }
    public function isExpensive(){
        if($this->price >=500){
            return true;
        } else {
            return false;
        }
    }

    }

    class LaptopProduct extends producto {
        private string $graphicsCard;

        public function __construct($name, $price ,$graphicsCard){

        parent::__construct($name , $price);
            $this->graphicsCard = $graphicsCard;
        }
        public function  displaySpecification(){
            echo "<p>FICHA TECNICA </p>";
            echo "<p> Nombre: $this->name </p>";
            echo "<p> Tarjeta grafica: $this->graphicsCard </p>";

        if($this->isExpensive()== true){
            echo "<p>(Premium High-End Setup) 🚀 $this->price </p>";

        }else{
            echo "<p>(Standard Gaming Setup) 🕹️ $this->price </p>";
        }
    }
}
    $laptop1 = new LaptopProduct("ASUS ROG Strix", 1200.0, "RTX 4080");
    $laptop1->displaySpecification();


?>