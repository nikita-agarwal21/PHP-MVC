
<?php 
  class LikeDislikeHelper1
  { 
     private $likeresult,$dislikeresult;
  

     public function __construct() 
     { 
         if ( isset($_POST['likenumber'])) 
               $this->likeresult = $_POST['likenumber']; 
               if ( isset($_POST['dislikenumber'])) 
               $this->dislikeresult = $_POST['dislikenumber'];
            
     }

     public function getLike() 
     { 
         if ( !$this->likeresult ) 
             return ''; 
         else 
             return $this->likeresult; 
     } 
     public function getDislike() 
     { 
         if ( !$this->dislikeresult ) 
             return ''; 
         else 
             return $this->dislikeresult; 
     } 

     
    
  } 
?>

