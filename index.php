<?php

use function PHPSTORM_META\map;

require_once "./classes/Animal.php";
 require_once "./classes/Product.php";
require_once "./classes/FoodProduct.php";
require_once "./classes/MedicineProduct.php";
require_once "./classes/AccesorieProduct.php";
require_once "./DB/animalDB.php";
require_once "./DB/accesorieDB.php";
require_once "./DB/foodDB.php";
require_once "./DB/medicineDB.php";


// $scatolette=new FoodProduct("4534ds","da mangiare",6,"cibo","3 mesi","","cane");
// $cane=new Animal("cane");
// var_dump($scatolette);

$animalList=array_map(function($animal){
    return new Animal($animal["type"]);

},$animalList);

foreach($accesorieList as $accesorie){
    $newaccesorie=new AccesorieProduct($accesorie["codeProduct"],$accesorie["description"],$accesorie["price"],$accesorie["imgURL"],$accesorie["animalReference"],$accesorie["material"]);
    if(in_array("cane",$newaccesorie->getAnimalReference())){
        foreach($animalList as $animal){
            if($animal->getType()==="cane"){
                $animal->addAccesorie($newaccesorie);
            }
        }
    }else if(in_array("gatto",$newaccesorie->getAnimalReference())){
        foreach($animalList as $animal){
            if($animal->getType()==="gatto"){
                $animal->addAccesorie($newaccesorie);
            }
        }
    }
}

foreach($foodList as $food){
    $newfood=new FoodProduct($food["codeProduct"],$food["description"],$food["price"],$food["imgURL"],$food["animalReference"],$food["type"],$food["conservationTime"]);
    if(in_array("cane",$newfood->getAnimalReference())){
        foreach($animalList as $animal){
            if($animal->getType()==="cane"){
                $animal->addFood($newfood);
            }
        }
    }else if(in_array("gatto",$newfood->getAnimalReference())){
        foreach($animalList as $animal){
            if($animal->getType()==="gatto"){
                $animal->addFood($newfood);
            }
        }
    }
}

foreach($medicineList as $medicine){
    $newmedicine=new MedicineProduct($medicine["codeProduct"],$medicine["description"],$medicine["price"],$medicine["imgURL"],$medicine["animalReference"],$medicine["usefullTo"],$medicine["howToUSe"]);
    if(in_array("cane",$newmedicine->getAnimalReference())){
        foreach($animalList as $animal){
            if($animal->getType()==="cane"){
                $animal->addMedicine($newmedicine);
            }
        }
    }else if(in_array("gatto",$newmedicine->getAnimalReference())){
        foreach($animalList as $animal){
            if($animal->getType()==="gatto"){
                $animal->addMedicine($newmedicine);
            }
        }
    }
}

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