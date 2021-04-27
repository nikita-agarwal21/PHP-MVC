//using radio button  
                                //GenderMVC.php

 

<!DOCTYPE html>

<?php
    require_once 'GenderHelper.php';
    $genderHelper = new GenderHelper();

    $result = false;
    if ( isset($_POST['gender']))
        $result = $_POST['result'];
?>

<html>
  <head>
      
  </head>

  <body >
    <br>
    <br>
    <form name="genderForm" method="post" action="GenderController.php" >
       Gender : 
       <input type="radio" name="gender" value="m" required <?php echo $genderHelper->isGenderChecked("m"); ?>>Male
       <input type="radio" name="gender" value="f" required <?php echo $genderHelper->isGenderChecked("f"); ?>>Female
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

                          //GenderHelper.php

<?php 
   class GenderHelper 
   { 
      private $gender;

      public function __construct() 
      { 
           if ( isset($_POST['gender'])) 
           $this->gender = $_POST['gender']; 
      }

      public function isGenderChecked($par) 
      { 
           if ( !$this->gender ) return ''; 
           if ( $this->gender == $par ) 
                 return 'Checked'; 
           else  
                 return ''; 
      }       
   } 
?>

                       //GenderController.php

<?php

     if ( isset($_POST['gender'] ))
     {
          $result = $_POST['gender'].' is selected';
          $_POST['result'] = $result;
     }
     include 'GenderMVC.php';
?>
