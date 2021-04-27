//using dropdown box             
                                            //CityMVC.php

<?php
    require_once 'CityHelper.php';
    $cityHelper = new CityHelper();

    $result = false;
    if ( isset($_POST['result']))
         $result = $_POST['result'];
?>

<html>
  <head>
     
  </head>

  <body >
    <form name="cityForm" method="post" action="CityController.php" >
    <br>
    <br>
    City : 
    <select name="city">
      <option value='Mumbai' <?php echo $cityHelper->isCitySelected('Mumbai'); ?>>Mumbai</option>
      <option value='Chennai' <?php echo $cityHelper->isCitySelected('Chennai'); ?>>Chennai</option>
      <option value='Bangalore' <?php echo $cityHelper->isCitySelected('Bangalore'); ?>>Bengalore</option>
      <option value='Hyderabad' <?php echo $cityHelper->isCitySelected('Hyderabad'); ?>>Hyderabad</option>
      <option value='Kolkata' <?php echo $cityHelper->isCitySelected('Kolkata'); ?>>Kolkata</option>
      <option value='Delhi' <?php echo $cityHelper->isCitySelected('Delhi'); ?>>Delhi</option>
    </select>
    <br>
    <br>
    <input type="submit" value="Submit" />
    <br>
    <br>
    <?php
         if ( $result )
            echo $result;
    ?>
    </form>
  </body>
</html>


                        //CityHelper.php


 <?php 
  class CityHelper 
  { 
     private $city;

     public function __construct() 
     { 
         if ( isset($_POST['city'])) 
         $this->city = $_POST['city']; 
     }

     public function isCitySelected($par) 
     { 
         if ( !$this->city ) 
             return ''; 
         if ( $this->city == $par ) 
             return 'Selected'; 
         else  
             return ''; 
     } 
  } 
?>


                      //CityController.php


<?php

$result = false;
if ( isset($_POST['city']))
{
    $result = 'City selected : '.$_POST['city'];
}
$_POST['result'] = $result;
include 'CityMVC.php';
?>



 








 
