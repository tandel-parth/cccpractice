<?php
class Product {
    private $productId;
    private $name;
    private $price;

    public function __construct($productId, $name, $price) {
        $this->productId = $productId;
        $this->name = $name;
        $this->price = $price;
    }
    public function getName() {
        return $this->name;
    }
    public function getPrice() {
        return $this->price;
    }
}

class ShoppingCart {
    private $items = [];

    public function addItem(Product $product) {
        $this->items[] = $product;
    }

    public function calculateTotal() {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }
        return $total;
    }

    public function displayItems() {
        echo "<b>Shopping Cart Items:</b> <br>";
        foreach ($this->items as $item) {
            echo "{$item->getName()} - {$item->getPrice()}₹ <br>";
        }
    }
}

// Create product objects
$product1 = new Product(1, "Laptop", 800);
$product2 = new Product(2, "Smartphone", 400);

// Create a shopping cart object
$cart = new ShoppingCart();

// Add products to the cart
$cart->addItem($product1);
$cart->addItem($product2);

// Display items and calculate total price
$cart->displayItems();
echo "Total Price: " . $cart->calculateTotal() . " ₹";
?>
