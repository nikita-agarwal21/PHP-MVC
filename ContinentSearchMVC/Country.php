<?php

class Country
  {  
    
     private $country_code;
     private $name;
     private $capital;
     private $population;
     private $horbour;
     private $island;
     private $continent_code;


     private $area;

     public function __construct($country_code,$name,$area,$capital,$population,$horbour,$island,$continent_code)
     {
      
      $this->country_code = $country_code;
     $this->name=$name;
     $this->area=$area;
     $this->capital=$capital;
     $this->population=$population;
     $this->horbour=$horbour;
     $this->island=$island;
     $this->continent_code = $continent_code;

      
     }
    

     public function getCountryCode()
     {
        return $this->country_code;
     }

     public function setCountryCode($country_code)
     {
        $this->country_code= $country_code;
     }

     public function getName()
     {
        return $this->name;
     }

     public function setName($name)
     {
        $this->name= $name;
     }

     public function getArea()
     {
        return $this->area;
     }

     public function setArea($area)
     {
        $this->area= $area;
     }
     
     public function getCapital()
     {
        return $this->capital;
     }

     public function setCapital($capital)
     {
        $this->capital= $capital;
     }

     public function getPopulation()
     {
        return $this->population;
     }

     public function setPopulation($population)
     {
        $this->population= $population;
     }
     
     public function getHorbour()
     {
        return $this->horbour;
     }

     public function setHorbour($horbour)
     {
        $this->horbour = $horbour;
     }
     public function getIsland()
     {
        return $this->island;
     }

     public function setIsland($island)
     {
        $this->island = $island;
     }

     public function getContinentCode()
     {
        return $this->continent_code;
     }

     public function setContinentCode($continent_code)
     {
        $this->continent_code= $continent_code;
     }
     
    
  } 



?>