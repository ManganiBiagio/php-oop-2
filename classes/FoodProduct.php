<?php
require_once __DIR__ . "/Product.php";
class FoodProduct extends Product{
    //secco umido snack
    private string $type;
    private string $conservationTime;


    public function __construct($_codeProduct,$_description,$_price,$_imgURL,$_animalReference,$_type,$_conservationTime){
        parent::__construct($_codeProduct,$_description,$_price,$_imgURL,$_animalReference);
        $this->setType($_type);
        $this->setConservationTime($_conservationTime);
        
    }

    public function printCardHTML(){
        ?> <div class="col">
        <div class="card" style="width: 18rem;">
            <img src=<?php echo $this->getImgURL() ?> class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $this->getDescrpition() ?></h5>
                
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Prezzo: <?php echo $this->getPrice() ?>$</li>
                <li class="list-group-item">Tipo:<?php echo $this->getType() ?></li>
                <li class="list-group-item">Conservazione:<?php echo $this->getConservationTime() ?></li>
            </ul>
            
        </div>
    </div>
    <?

    }


    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of conservationTime
     */ 
    public function getConservationTime()
    {
        return $this->conservationTime;
    }

    /**
     * Set the value of conservationTime
     *
     * @return  self
     */ 
    public function setConservationTime($conservationTime)
    {
        $this->conservationTime = $conservationTime;

        return $this;
    }
}