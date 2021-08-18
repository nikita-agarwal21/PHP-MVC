<?php
    
   

require_once 'LikeDislikeHelper1.php';
$likedislikeHelper = new LikeDislikeHelper1();


   $likeresult = 0;
   $dislikeresult = 0;

  

   if(isset($_POST['likenumber']))
      $likeresult = $_POST['likenumber'];

   if(isset($_POST['dislikenumber']))
      $dislikeresult= $_POST['dislikenumber'];  
  

?>
<!doctype html>
<html lang="en">
  <head>
    <title>like dislike</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel = "stylesheet" href = "style1.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         
    <script>
        function likedislike(par)
        {
            document.likeDislikeForm.likeDislike.value = par;
            document.likeDislikeForm.submit();
        }
      
    </script>
    <style>
      
      .content 
        {
            max-width : 350px;
            margin : auto;
            text-align : center;
        }
        h1{
            display : inline-block;
        }
    </style>
    </head>
  
   <body>
   <div calss="content">
     <form name = "likeDislikeForm" method = "post" action = "LikeDislikeController.php" >
     <br>
     <br>

    
     <img style = "border:3px solid black; " src = "../../images/ken.jpg" height = "300" width = "300"/>
     <br>
     <br> 
     <input type="hidden" name="like" value="<?php echo $likedislikeHelper->getLike() ?>" />
        <input type="hidden" name="dislike" value="<?php echo $likedislikeHelper->getDislike() ?>" />
        
     <input type = "hidden" name = "likeDislike" />

     <input type="image" src="../../images/like.jpg" name="button"  value = "like" width="100" height="100" alt="submit" onclick="likedislike('like')">
     &nbsp;  &nbsp; &nbsp; &nbsp;
     
     
     <input type="image" src="../../images/dislike.jpg" name="button" value = "dislike" width="100" height="100" alt="submit" onclick="likedislike('dislike')">
     <br>
         &nbsp;  &nbsp; 
     <input type="text" size = "5" name="likenumber" value="<?php echo $likeresult ;?>" />
     &nbsp;  &nbsp; &nbsp; &nbsp;
        &nbsp;  &nbsp; &nbsp; &nbsp;
       
     <input type="text" size ="5" name="dislikenumber" value="<?php echo $dislikeresult ?>" />



     </form>
     </div>
    </body>
 
</html>    
       
