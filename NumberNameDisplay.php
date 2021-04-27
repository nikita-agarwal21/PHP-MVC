//using text box                 
                                  //NumberMVC.php

<?php
 require 'NumberHelper.php';
 $numberHelper=new NumberHelper();


 $result=false;

 if(isset($_POST['number']))
      $result=$_POST['result'];



?>


<html>
<head>
<style>

div{
  color:white;
}
form{

  color:white;
}
</style>
</head>
<body style='background-color:blue;'>
<center>
<form name='numberName' method='POST' action='NumberController.php'>
<br><br>
NUMBER:
<input type='text' name='number' size='5' value="<?php echo $_POST['number'] ?>"/>

<br>
<br>

<input type='submit' value='submit'/>
</form>
</center>

<?php
 if($result)
   {
     ?>
     <center>   
    <div> <h1><?php
   echo  $numberHelper->getNumberName();
   }

?></h1></div>
</center>
</body>


</html>


                  //NumberHelper.php
                  
<?php
 class NumberHelper
 {
     private $number;
      public function __construct()
      {
          if(isset($_POST['number']))
          $this->number=$_POST['number'];
      }

public function getNumberName()
{

  if(!$this->number)
    return '';
    elseif($this->number==1)
     return 'one';
    elseif($this->number==2)
    return 'two';
    elseif($this->number==3)
    return 'three';
    elseif($this->number==4)
    return'four';  //can add as much as number names required
    else
    return '' ;
   
}

 }

?>


                //NumberController.php
 
 <?php

$result=false;

if(isset($_POST['number']))
{
    $result=$_POST['number'];
    $_POST['result']=$result;
}

include 'NumberMVC.php';



?>
