<?php
    class Product
    {
        private $prod_id,$prod_name,$prod_description,$prod_price,$category;
        
        function __construct($prod_id,$prod_name,$prod_description,$prod_price,$category)
        {
            $this->prod_id=$prod_id;
            $this->prod_name=$prod_name;
            $this->prod_description=$prod_description;
            $this->prod_price=$prod_price;
            $this->category=$category;
        }
          
        public function setProdName($prod_name)
        {
             $this->prod_name=$prod_name;
        }
        
        public function setProdDescription($prod_name)
        {
             $this->prod_description=$prod_name;
        }
        
        public function setProdPrice($prod_name)
        {
             $this->prod_price=$prod_name;
        }
        
        public function setCategory($prod_cat)
        {
             $this->category=$prod_cat;
        }
        
        public function getName()
        {
            return $this->prod_name;
        }
        
          public function getId()
        {
            return $this->prod_id;
        }
        
         public function getDescription()
        {
            return $this->prod_description;
        }
        
         public function getPrice()
        {
            return $this->prod_price;
        }
        
         public function getCategory()
        {
            return $this->category;
        }
    }
?>
