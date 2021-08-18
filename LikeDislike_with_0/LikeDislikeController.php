
<?php
   if ( isset($_POST['like']))
       $like = $_POST['like'];
       if ( isset($_POST['dislike']))
       $dislike= $_POST['dislike'];
   if ( isset($_POST['operation']))
       $operation = $_POST['operation'];   

   if ( $operation == '+' )
      $like = intval($like) + 1;
   else
      $dislike = intval($dislike) +1;   

   $_POST['like'] = $like;
   $_POST['dislike'] = $dislike;

   include 'LikeDislike.php';
?>

