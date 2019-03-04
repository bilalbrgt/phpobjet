<?php
class Product{
   public $name;
     public $descriptions;
      public $price; 
    public function displayPrice()
    {
        return 'le prix:'  .$this->price.'€';
        
    }
    
}