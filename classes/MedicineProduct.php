<?php
require_once __DIR__ . "/Product.php";
class MedicineProduct extends Product{
    private string $usefullTo;
    private string $howToUSe;

    public function __construct($_codeProduct,$_description,$_price,$_imgURL,$_animalReference,$_usefullTo,$_howToUSe){
        parent::__construct($_codeProduct,$_description,$_price,$_imgURL,$_animalReference);
        $this->setUsefullTo($_usefullTo);
        $this->setHowToUSe($_howToUSe);

        
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
                <li class="list-group-item">Usato per:<?php echo $this->getUsefullTo() ?></li>
                <li class="list-group-item">Utilizzo:<?php echo $this->getHowToUSe() ?></li>
            </ul>
            
        </div>
    </div>
    <?

    }

    /**
     * Get the value of usefullTo
     */ 
    public function getUsefullTo()
    {
        return $this->usefullTo;
    }

    /**
     * Set the value of usefullTo
     *
     * @return  self
     */ 
    public function setUsefullTo($usefullTo)
    {
        $this->usefullTo = $usefullTo;

        return $this;
    }

    /**
     * Get the value of howToUSe
     */ 
    public function getHowToUSe()
    {
        return $this->howToUSe;
    }

    /**
     * Set the value of howToUSe
     *
     * @return  self
     */ 
    public function setHowToUSe($howToUSe)
    {
        $this->howToUSe = $howToUSe;

        return $this;
    }
}