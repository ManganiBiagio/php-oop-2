

<?php 

class User{
    private string $nickname;
    private string $password;
    private array $shoppingCart;
    private int $discount=20;

    public function __construct($nickname,$password,$shoppingCart){
        $this->setNickname($nickname);
        $this->setPassword($password);
        $this->setShoppingCart($shoppingCart);
    }
    

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of nickname
     */ 
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set the value of nickname
     *
     * @return  self
     */ 
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get the value of shoppingCart
     */ 
    public function getShoppingCart()
    {
        return $this->shoppingCart;
    }

    /**
     * Set the value of shoppingCart
     *
     * @return  self
     */ 
    public function setShoppingCart($shoppingCart)
    {
        $this->shoppingCart = $shoppingCart;

        return $this;
    }

    /**
     * Get the value of discount
     */ 
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set the value of discount
     *
     * @return  self
     */ 
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }
}