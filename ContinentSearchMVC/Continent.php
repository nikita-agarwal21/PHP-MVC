<?php

  class Continent
  {  
    
     private $continent_code;
     private $name;

     public function __construct($continent_code,$name)
     {
      
       $this->continent_code = $continent_code;
     $this->name=$name;
      
     }
    

     public function getContinentCode()
     {
        return $this->continent_code;
     }

     public function setContinentCode($continent_code)
     {
        $this->continent_code= $continent_code;
     }
     public function getName()
     {
        return $this->name;
     }

     public function setName($name)
     {
        $this->name= $name;
     }

    
    
  } 



?>