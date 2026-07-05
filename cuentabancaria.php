<?php

class ShoppingCart {
    // 1. PROPERTIES
    private string $owner;
    private float $totalPrice;
    private int $totalItems;

    // 2. CONSTRUCTOR
    public function __construct($owner) {
        $this->owner = $owner;
        $this->totalPrice = 0.0;
        $this->totalItems = 0;
    }

    // 3. ADD ITEM METHOD (Completa la lógica matemática de acumular)
    public function addItem($price, $quantity) {
        if ($price > 0 && $quantity > 0) {
            // TU CÓDIGO AQUÍ: Acumula en $this->totalPrice el resultado de ($price * $quantity)
            
            // TU CÓDIGO AQUÍ: Acumula en $this->totalItems la $quantity nueva
            
            echo "Items added to cart.<br>";
        } else {
            echo "Error: Invalid price or quantity.<br>";
        }
    }

    // 4. CHECKOUT METHOD (El momento de pagar y vaciar)
    public function checkout() {
        if ($this->totalItems == 0) {
            echo "Your cart is empty.<br>";
        } else {
            // TU CÓDIGO AQUÍ: Reinicia el precio total a 0.0
            
            // TU CÓDIGO AQUÍ: Reinicia los productos totales a 0
            
            echo "Payment successful. Thank you for your purchase!<br>";
        }
    }

    // 5. DISPLAY METHOD
    public function displayCart() {
        echo "Cart Owner: " . $this->owner . "<br>";
        echo "Total Items: " . $this->totalItems . "<br>";
        echo "Total Price: $" . $this->totalPrice . "<br><br>";
    }
}

// ==========================================
// PRUEBA DE FUNCIONAMIENTO
// ==========================================

$myCart = new ShoppingCart("Erney");

// 1. Añadimos 2 ratones gaming de $50 cada uno
$myCart->addItem(50.0, 2); 
$myCart->displayCart(); // Debería mostrar 2 items y $100

// 2. Pasamos por caja
$myCart->checkout();
$myCart->displayCart(); // Debería mostrar 0 items y $0 (vacío)

?>