<?php
 

 $result=" ";

if(isset($_POST['day']))
$day=$_POST['day'];

if(isset($_POST['month']))
$month=$_POST['month'];

if (isset($_REQUEST['btn_submit'])){
   if($month=='12')
     {
          if($day<'22')
           $result='sagittarius';
          else {
               $result='capricorn';
          }
     }
     else if($month =='1')
     {
          if($day<'20')
           $result='capricorn';
          else  {
              $result='aquarius';
          }
     }
     else if($month =='2')
     {
          if($day<'19')
           $result='aquarius';
          else  {
              $result='pisces';
          }
     }
     else if($month =='3')
     {
          if($day<'21')
           $result='pisces';
          else  {
              $result='aries';
          }
     }
     else if($month =='4')
     {
          if($day<'20')
            $result='aries';
          else  {
            $result='taurus';
               }
     }
     else if($month =='5')
     {
          if($day<'21')
            $result='taurus';
          else  {
            $result='gemini';
               }
     }
     else if($month =='6')
     {
          if($day<'21')
            $result='gemeni';
          else  {
            $result='cancer';
               }
     }
     else if($month =='7')
     {
          if($day<'23')
            $result='cancer';
          else  {
            $result='leo';
               }
     }
     else if($month =='8')
     {
          if($day<'23')
            $result='leo';
          else  {
            $result='virgo';
               }
     }
     else if($month =='9')
     {
          if($day<'23')
            $result='virgo';
          else  {
            $result='libra';
               }
     }
     else if($month =='10')
     {
          if($day<'23')
            $result='libra';
          else  {
            $result='scorpio';
               }
     }
     else if($month =='11')
     {
          if($day<'22')
            $result='scorpio';
          else  {
            $result='sagittarius';
               }
     }
     
    } 

    $_POST['result'] = $result;
    
     include 'ZodiacMVC.php';
    
 

?>