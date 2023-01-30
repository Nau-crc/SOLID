<?php 

namespace App;

require_once 'O_Open_Closed\MenuOutput.php';


class JsonMenuOutput implements MenuOutput
{
    public function output ($products)
    {
        return $menu = json_encode($products);
    }
    
}