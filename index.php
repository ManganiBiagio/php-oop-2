<?php

use function PHPSTORM_META\map;

require_once "./classes/Animal.php";
 require_once "./classes/Product.php";
require_once "./classes/FoodProduct.php";
require_once "./classes/MedicineProduct.php";
require_once "./classes/AccesorieProduct.php";
require_once "./DB/animalDB.php";

// $scatolette=new FoodProduct("4534ds","da mangiare",6,"cibo","3 mesi","","cane");
// $cane=new Animal("cane");
// var_dump($scatolette);

$animalList=array_map(function($animal){
    return new Animal($animal["type"]);

},$animalList);

var_dump($animalList);





?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    prova
    
</body>
</html>