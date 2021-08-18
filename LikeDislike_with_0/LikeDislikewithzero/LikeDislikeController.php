<?php 
   $likeresult= 0;
   $dislikeresult = 0;

   

  
   if(isset($_POST['likenumber']))
     $likeresult = $_POST['likenumber'];
   if(isset($_POST['dislikenumber']))
      $dislikeresult = $_POST['dislikenumber'];  
  if(isset($_POST['likeDislike']))
      $result = $_POST['likeDislike'];  
    
    if($result == 'like')
    {
        $likeresult = intval($likeresult) + 1;
       }
    else if($result == 'dislike')
    {
       $dislikeresult = intval($dislikeresult) + 1;
      
     
    }
    
  




    $_POST['likenumber'] = $likeresult;
    $_POST['dislikenumber'] = $dislikeresult;
    


   include 'LikeDislikeMVC.php';
?>   