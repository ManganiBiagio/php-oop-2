<?php

use function PHPSTORM_META\map;

require_once "./classes/Animal.php";
require_once "./classes/Product.php";
require_once "./classes/FoodProduct.php";
require_once "./classes/MedicineProduct.php";
require_once "./classes/AccesorieProduct.php";
require_once "./classes/Users.php";
require_once "./DB/animalDB.php";
require_once "./DB/accesorieDB.php";
require_once "./DB/foodDB.php";
require_once "./DB/medicineDB.php";
require_once "./DB/userDB.php";



// $scatolette=new FoodProduct("4534ds","da mangiare",6,"cibo","3 mesi","","cane");
// $cane=new Animal("cane");
// var_dump($scatolette);

$animalList = array_map(function ($animal) {
    return new Animal($animal["type"]);
}, $animalList);

foreach ($accesorieList as $accesorie) {
    $newaccesorie = new AccesorieProduct($accesorie["codeProduct"], $accesorie["description"], $accesorie["price"], $accesorie["imgURL"], $accesorie["animalReference"], $accesorie["material"]);
    if (in_array("cane", $newaccesorie->getAnimalReference())) {
        foreach ($animalList as $animal) {
            if ($animal->getType() === "cane") {
                $animal->addAccesorie($newaccesorie);
            }
        }
    } else if (in_array("gatto", $newaccesorie->getAnimalReference())) {
        foreach ($animalList as $animal) {
            if ($animal->getType() === "gatto") {
                $animal->addAccesorie($newaccesorie);
            }
        }
    }
}

foreach ($foodList as $food) {
    $newfood = new FoodProduct($food["codeProduct"], $food["description"], $food["price"], $food["imgURL"], $food["animalReference"], $food["type"], $food["conservationTime"]);
    if (in_array("cane", $newfood->getAnimalReference())) {
        foreach ($animalList as $animal) {
            if ($animal->getType() === "cane") {
                $animal->addFood($newfood);
            }
        }
    } else if (in_array("gatto", $newfood->getAnimalReference())) {
        foreach ($animalList as $animal) {
            if ($animal->getType() === "gatto") {
                $animal->addFood($newfood);
            }
        }
    }
}

foreach ($medicineList as $medicine) {
    $newmedicine = new MedicineProduct($medicine["codeProduct"], $medicine["description"], $medicine["price"], $medicine["imgURL"], $medicine["animalReference"], $medicine["usefullTo"], $medicine["howToUSe"]);
    if (in_array("cane", $newmedicine->getAnimalReference())) {
        foreach ($animalList as $animal) {
            if ($animal->getType() === "cane") {
                $animal->addMedicine($newmedicine);
            }
        }
    } else if (in_array("gatto", $newmedicine->getAnimalReference())) {
        foreach ($animalList as $animal) {
            if ($animal->getType() === "gatto") {
                $animal->addMedicine($newmedicine);
            }
        }
    }
}
$cane;
$gatto;
//var_dump($animalList);
foreach($animalList as $animal){
    if($animal->getType()==="cane"){
        $cane=$animal;
    }else if($animal->getType()==="gatto"){
        $gatto=$animal;
    }

}

//var_dump($cane);


//BONUS CODE

$userList=array_map(function($user){
    return new User($user["nickname"],$user["password"],$user["shoppingCart"]);
},$userList);
var_dump($userList);


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
    <div class="container">
        <h1>Negozio per animali</h1>
        <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nickname</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Accedi</button>
  <button type="submit" class="btn btn-success">Genera</button>
</form>

        <!-- sezioni cani -->
        <section>
            <h4>Cani</h4>
            <h6>Cibo</h6>
            <div class="row">
                <?php foreach($cane->getFoodList() as $food){  
                    $food->printCardHTML();
                 } ?>
            </div>
            <h6>Medicine</h6>
            <div class="row">
                <?php foreach($cane->getMedicineList() as $medicine){
                    $medicine->printCardHTML();
                 } ?>
            </div>
            <h6>Accessori</h6>
            <div class="row">
                <?php foreach($cane->getAccesorieList() as $accesorie){                   
                    $accesorie->printCardHTML();               
                 } ?>
            </div>
        </section>
        <!-- sezione gatti  -->
        <section>
            <h4>Gatti</h4>
            <h6>Cibo</h6>
            <div class="row">
                <?php foreach($gatto->getFoodList() as $food){  
                    $food->printCardHTML();
                } ?>
            </div>
            <h6>Medicine</h6>
            <div class="row">
                <?php foreach($gatto->getMedicineList() as $medicine){
                    $medicine->printCardHTML();
                 } ?>
            </div>
            <h6>Accessori</h6>
            <div class="row">
                <?php foreach($gatto->getAccesorieList() as $accesorie){
                    $accesorie->printCardHTML();               
                 } ?>
            </div>
        </section>
    </div>

</body>

</html>