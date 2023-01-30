<?php 

namespace App;

include_once 'vendor/autoload.php';
include_once 'index.php';

class CoffeeShop

{
    protected $products = [];

    public function addProducts($product = [])
<<<<<<< HEAD
=======

>>>>>>> 7503469b394a408b3de3ffb2309c0b237a69840a
    {
        $this->products = $product;
    }
    
    public function getProducts()

    {
        return $this->products;
    }
    public function removeProducts($id)

    {
        // Code here...
    }
<<<<<<< HEAD
    
    
=======
    public function addToCart($id, $quantity)

    {
        // Code here...
    }
    public function getTotal()

    {
        // Code here...
    }
    public function viewMenu()

    {
        $menu = ''; 

        $menu .= "ID\tNombre\t\tPrecio\n";
        $menu .= str_repeat('=', 30) . "\n"; 

        foreach ($this->products as $product) {
            $menu .=$product['id'] . "\t"
                . str_pad($product['name'], 15, ' ') . "\t"
                .$product['price'] . "\n";
        }

        return $menu;
    }
>>>>>>> 7503469b394a408b3de3ffb2309c0b237a69840a

}