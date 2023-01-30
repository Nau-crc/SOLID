<?php 

namespace App;

require_once 'O_Open_Closed\MenuOutput.php';

class TextMenuOutput implements MenuOutput
{
    public function output($products)
    {
        $menu = "ID\tNombre\t\tPrecio\n";
        $menu .= str_repeat('=', 30) . "\n"; 

        foreach ($products as $product) {
            $menu .=$product['id'] . "\t"
                . str_pad($product['name'], 15, ' ') . "\t"
                .$product['price'] . "\n";
        }

        return $menu;
    }
}