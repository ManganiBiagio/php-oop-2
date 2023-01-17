<?php
require_once __DIR__ . "/Product.php";
class AccesorieProduct extends Product{
    private string $material;
    


    public function __construct($_codeProduct,$_description,$_price,$_imgURL,$_animalReference,$_material){
        parent::__construct($_codeProduct,$_description,$_price,$_imgURL,$_animalReference);
        $this->setMaterial($_material);
    }

    public function printCardHTML(){
        ?><div class="col">
        <div class="card" style="width: 18rem;">
            <img src=<?php echo $this->getImgURL() ?> class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $this->getDescrpition() ?></h5>
                
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Prezzo: <?php echo $this->getPrice() ?>$</li>
                <li class="list-group-item">Materiale:<?php echo $this->getMaterial() ?></li>
                
            </ul>
            
        </div>
    </div>
    <?

    }
        
        

    /**
     * Get the value of material
     */ 
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */ 
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }
    }