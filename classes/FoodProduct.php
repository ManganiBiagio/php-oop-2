<?php
require_once __DIR__ . "/Product.php";
class FoodProduct extends Product{
    //secco umido snack
    private string $type;
    private string $conservationTime;


    public function __construct($_codeProduct,$_description,$_price,$_type,$_conservationTime){
        parent::__construct($_codeProduct,$_description,$_price);
        $this->setType($_type);
        $this->setConservationTime($_conservationTime);
        
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