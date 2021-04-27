//using checkboxes 
                                    //ProglangMVC.php


<!DOCTYPE html>

<?php
    require_once 'ProgLangHelper.php';    
    $progLangHelper = new ProgLangHelper();

    $result = false;
    if ( isset($_POST['result']))
         $result = $_POST['result'];
?>

<html>
  <head>
    
  </head>

  <body >
    <br>
    <br>
    <form name="progLanguagesForm" method="post" action="ProgLangController.php" >
       Programming Languages : 
       <input type="checkbox" name="progLanguages[]" value="C" <?php echo $progLangHelper->isProgLanguageChecked('C'); ?> />C
       <input type="checkbox" name="progLanguages[]" value="C++" <?php echo $progLangHelper->isProgLanguageChecked('C++'); ?> />C++
       <input type="checkbox" name="progLanguages[]" value="Java" <?php echo $progLangHelper->isProgLanguageChecked('Java'); ?> />Java
       <input type="checkbox" name="progLanguages[]" value="PHP" <?php echo $progLangHelper->isProgLanguageChecked('PHP'); ?> />PHP
       <input type="checkbox" name="progLanguages[]" value="Python" <?php echo $progLangHelper->isProgLanguageChecked('Python'); ?> />Python
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




                             //ProgLangHelper.php


<?php 
  class ProgLangHelper 
  { 
    private $progLanguages;

    public function __construct() 
    { 
       if ( isset($_POST['progLanguages'])) 
       { 
         $this->progLanguages = $_POST['progLanguages']; 
       } 
    }

    public function isProgLanguageChecked($par) 
    { 
        if ( !$this->progLanguages ) 
            return ''; 
        foreach ( $this->progLanguages as $lang )
             if ( $lang == $par )
                  return 'checked'; 

        return ''; 
    } 
  } 
?>


                          //ProgLangController.php



<?php
    $result = '';

    if ( isset($_POST['progLanguages']))
    {
         $progLanguages = $_POST['progLanguages'];
         $result = 'Languages selected : ';
         foreach ( $progLanguages as $lang )
             $result = $result.$lang.' ';
    } 
    $_POST['result'] = $result;          

    include 'ProgLangMVC.php';
?>
