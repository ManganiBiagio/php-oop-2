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