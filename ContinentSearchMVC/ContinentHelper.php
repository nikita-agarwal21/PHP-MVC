<?php 
  class ContinentHelper 
  { 
     private $name;

     public function __construct() 
     { 
         if ( isset($_POST['name'])) 
         $this->name = $_POST['name']; 
     }

     public function isContinentSelected($par) 
     { 
         if ( !$this->name ) 
             return ''; 
         if ( $this->name == $par ) 
             return 'Selected'; 
         else  
             return ''; 
     } 
  } 
?>
