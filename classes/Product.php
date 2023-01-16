<?php

class Product{
    private string $codeProduct;
    private string $descrpition;
    private float $price;
    private string $imgURL;

    public function __construct($_codeProduct,$_description,$_price,$_imgURL){
        $this->setCodeProduct($_codeProduct);
        $this->setDescrpition($_description);
        $this->setPrice($_price);
        $this->setImgURL($_imgURL);
    }
    

    /**
     * Get the value of codeProduct
     */ 
    public function getCodeProduct()
    {
        return $this->codeProduct;
    }

    /**
     * Set the value of codeProduct
     *
     * @return  self
     */ 
    public function setCodeProduct($codeProduct)
    {
        $this->codeProduct = $codeProduct;

        return $this;
    }

    /**
     * Get the value of descrpition
     */ 
    public function getDescrpition()
    {
        return $this->descrpition;
    }

    /**
     * Set the value of descrpition
     *
     * @return  self
     */ 
    public function setDescrpition($descrpition)
    {
        $this->descrpition = $descrpition;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of imgURL
     */ 
    public function getImgURL()
    {
        return $this->imgURL;
    }

    /**
     * Set the value of imgURL
     *
     * @return  self
     */ 
    public function setImgURL($imgURL)
    {
        $this->imgURL = $imgURL;

        return $this;
    }
}