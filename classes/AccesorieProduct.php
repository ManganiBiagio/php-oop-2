<?php
require_once __DIR__ . "/Product.php";
class AccesorieProduct extends Product{
    private string $material;
    


    public function __construct($_codeProduct,$_description,$_price,$_material){
        parent::__construct($_codeProduct,$_description,$_price);
        $this->setMaterial($_material);
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