<?php include_once 'vendor/autoload.php';
require_once 'S_Single_Responsability\CoffeeShop.php';
<<<<<<< HEAD
require_once 'S_Single_Responsability\Menu.php';
=======

>>>>>>> 7503469b394a408b3de3ffb2309c0b237a69840a

use App\CoffeeShop;
use App\Menu;

$products= [
    ['id'=> 1, 'name'=> 'Negro', 'price' => 2],
    ['id'=> 2, 'name'=> 'Con Leche', 'price' => 2.5],
    ['id'=> 3,'name'=> 'Capuccino', 'price' => 3],
];

$shop = new CoffeeShop();


$shop->addProducts($products);

$menu = new Menu();

echo $menu->view($shop->getProducts());
// echo $shop->viewMenu();