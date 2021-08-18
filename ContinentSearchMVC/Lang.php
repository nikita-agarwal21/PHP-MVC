<?php

  class Lang
  {  
    
     private $country_code;
     private $lang_type;

     public function __construct($lang_type,$country_code)
     {
      
       $this->lang_type = $lang_type;
     $this->country_code=$country_code;
      
     }
    

     public function getLangType()
     {
        return $this->lang_type;
     }

     public function setLangType($lang_type)
     {
        $this->lang_type= $lang_type;
     }
     public function getCountryCode()
     {
        return $this->country_code;
     }

     public function setCountryCode($country_code)
     {
        $this->country_code= $country_code;
     }

    
    
  } 



?>