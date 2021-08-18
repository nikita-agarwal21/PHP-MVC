<?php 
  class ZodiacHelper 
  { 
     private $day,$month;

     public function __construct() 
     { 
         if ( isset($_POST['day'])) 
               $this->day = $_POST['day']; 
         if ( isset($_POST['month'])) 
               $this->month = $_POST['month']; 
     }

     public function isDaySelected($par) 
     { 
         if ( !$this->day) 
             return ''; 
         if ( $this->day == $par ) 
             return 'Selected'; 
         else  
             return ''; 
     } 
     
     public function isMonthSelected($par) 
     { 
         if ( !$this->month) 
             return ''; 
         if ( $this->month == $par ) 
             return 'Selected'; 
         else  
             return ''; 
     } 
    
  } 
?>