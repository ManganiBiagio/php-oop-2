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
        <!-- sezioni cani -->
        <section>
            <h4>Cani</h4>
            <h6>Cibo</h6>
            <div class="row">
                <?php foreach($cane->getFoodList() as $food){  ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src=<?php echo $food->getImgURL() ?> class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $food->getDescrpition() ?></h5>
                            
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Prezzo: <?php echo $food->getPrice() ?>$</li>
                            <li class="list-group-item">Tipo:<?php echo $food->getType() ?></li>
                            <li class="list-group-item">Conservazione:<?php echo $food->getConservationTime() ?></li>
                        </ul>
                        
                    </div>
                </div>
                <?php } ?>
            </div>
            <h6>Medicine</h6>
            <div class="row">
                <?php foreach($cane->getMedicineList() as $medicine){  ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src=<?php echo $medicine->getImgURL() ?> class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $medicine->getDescrpition() ?></h5>
                            
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Prezzo: <?php echo $medicine->getPrice() ?>$</li>
                            <li class="list-group-item">Usato per:<?php echo $medicine->getUsefullTo() ?></li>
                            <li class="list-group-item">Utilizzo:<?php echo $medicine->getHowToUSe() ?></li>
                        </ul>
                        
                    </div>
                </div>
                <?php } ?>
            </div>
            <h6>Accessori</h6>
            <div class="row">
                <?php foreach($cane->getAccesorieList() as $accesorie){  ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src=<?php echo $accesorie->getImgURL() ?> class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $accesorie->getDescrpition() ?></h5>
                            
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Prezzo: <?php echo $accesorie->getPrice() ?>$</li>
                            <li class="list-group-item">Materiale:<?php echo $accesorie->getMaterial() ?></li>
                            
                        </ul>
                        
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>
        <!-- sezione gatti  -->
        <section>
            <h4>Gatti</h4>
            <h6>Cibo</h6>
            <div class="row">
                <?php foreach($gatto->getFoodList() as $food){  ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src=<?php echo $food->getImgURL() ?> class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $food->getDescrpition() ?></h5>
                            
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Prezzo: <?php echo $food->getPrice() ?>$</li>
                            <li class="list-group-item">Tipo:<?php echo $food->getType() ?></li>
                            <li class="list-group-item">Conservazione:<?php echo $food->getConservationTime() ?></li>
                        </ul>
                        
                    </div>
                </div>
                <?php } ?>
            </div>
            <h6>Medicine</h6>
            <div class="row">
                <?php foreach($gatto->getMedicineList() as $medicine){  ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src=<?php echo $medicine->getImgURL() ?> class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $medicine->getDescrpition() ?></h5>
                            
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Prezzo: <?php echo $medicine->getPrice() ?>$</li>
                            <li class="list-group-item">Usato per:<?php echo $medicine->getUsefullTo() ?></li>
                            <li class="list-group-item">utilizzo:<?php echo $medicine->getHowToUSe() ?></li>
                        </ul>
                        
                    </div>
                </div>
                <?php } ?>
            </div>
            <h6>Accessori</h6>
            <div class="row">
                <?php foreach($gatto->getAccesorieList() as $accesorie){  ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src=<?php echo $accesorie->getImgURL() ?> class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $accesorie->getDescrpition() ?></h5>
                            
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Prezzo: <?php echo $accesorie->getPrice() ?>$</li>
                            <li class="list-group-item">Materiale:<?php echo $accesorie->getMaterial() ?></li>
                            
                        </ul>
                        
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>
    </div>

</body>

</html>