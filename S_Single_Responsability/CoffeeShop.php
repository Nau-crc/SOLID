<?php 

namespace App;

include_once 'vendor/autoload.php';
include_once 'index.php';

class CoffeeShop

{
    protected $products = [];

    public function addProducts($product = [])
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
    
    

}