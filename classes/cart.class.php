<?php
    class Cart
     {
        private $product_id,$product_quantity;
    
        function __construct($product_id)
        {
             $this->product_id = $product_id;
             $this->product_quantity++;
        }
        
       public function setQuantity($product_quantity)
       {
           $this->product_quantity = $product_quantity;
       }
       
       public function incrementQuantity()
       {
           $this->product_quantity ++;
       }
       
       public function getQuantity()
       {
           return $this->product_quantity;
       }
       
       public function getId()
       {
           return $this->product_id;
       }
     }
?>
