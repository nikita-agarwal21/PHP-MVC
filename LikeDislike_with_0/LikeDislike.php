
<!doctype html>

<?php
   require_once 'LikeDislikeHelper.php';
   $likedislikeHelper = new LikeDislikeHelper();

   $like = 0;$dislike=0;
   if ( isset($_POST['like']))
      $like = $_POST['like'];
      if ( isset($_POST['dislike']))
      $dislike = $_POST['dislike'];

?>

<html>
  <head>
     <script>
         function handleLike()
         {
             document.likedislikeForm.operation.value = '+';
             document.likedislikeForm.submit();
         }

         function handleDislike()
         {
             document.likedislikeForm.operation.value = '-';
             document.likedislikeForm.submit();
         }

     </script>
  </head>
  <body>
    <br>
    <br>
    <form name="likedislikeForm" method="POST" action="LikeDislikeController.php" >

        <input type="hidden" name="like" value="<?php echo $likedislikeHelper->getLike() ?>" />
        <input type="hidden" name="dislike" value="<?php echo $likedislikeHelper->getDislike() ?>" />
        
        <input type="hidden" name="operation" />
<center>
        <img src="../images/ken.jpg" height="250px" width="300px">
        <br><br>
        
        <input type="image" src="../images/like.jpg" name="button" width="100" height="100" alt="submit" onClick="handleLike()"/>  
        
        &nbsp;  &nbsp; &nbsp; &nbsp;
      
        <input type="image" src="../images/dislike.jpg" name="button" width="100" height="100" alt="submit"   onClick="handleDislike()"/>  
  
         <br>
         &nbsp;  &nbsp; 
         
      <input type='text' size ='1' value='<?php echo $like?>'>  
        &nbsp;  &nbsp; &nbsp; &nbsp;
        &nbsp;  &nbsp; &nbsp; &nbsp;
        &nbsp;  &nbsp; &nbsp; &nbsp;
        &nbsp;  &nbsp; 
        <input type='text' size ='1' value='<?php echo $dislike ?>'>
        



      </center> 
                    
    </form>
  </body>
</html>









 