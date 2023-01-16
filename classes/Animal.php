<?php

class Animal{
    private string $type;
    private array $foodList=[];
    private array $medicineList=[];
    private array $accesorieList=[];

    public function __construct($_type="",$_foodList=[],$_medicineList=[],$_accesorieList=[]){
        $this->setType($_type);
        $this->setFoodList($_foodList);
        $this->setMedicineList($_medicineList);
        $this->setAccesorieList($_accesorieList);



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
     * Get the value of foodList
     */ 
    public function getFoodList()
    {
        return $this->foodList;
    }

    /**
     * Set the value of foodList
     *
     * @return  self
     */ 
    public function setFoodList($foodList)
    {
        $this->foodList = $foodList;

        return $this;
    }

    /**
     * Get the value of medicineList
     */ 
    public function getMedicineList()
    {
        return $this->medicineList;
    }

    /**
     * Set the value of medicineList
     *
     * @return  self
     */ 
    public function setMedicineList($medicineList)
    {
        $this->medicineList = $medicineList;

        return $this;
    }

    /**
     * Get the value of accesorieList
     */ 
    public function getAccesorieList()
    {
        return $this->accesorieList;
    }

    /**
     * Set the value of accesorieList
     *
     * @return  self
     */ 
    public function setAccesorieList($accesorieList)
    {
        $this->accesorieList = $accesorieList;

        return $this;
    }
}