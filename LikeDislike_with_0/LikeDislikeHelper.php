
<?php 
  class LikeDislikeHelper 
  { 
     private $like,$dislike;

     public function __construct() 
     { 
         if ( isset($_POST['like'])) 
               $this->like = $_POST['like']; 
               if ( isset($_POST['dislike'])) 
               $this->dislike = $_POST['dislike']; 
     }

     public function getLike() 
     { 
         if ( !$this->like ) 
             return ''; 
         else 
             return $this->like; 
     } 
     public function getDislike() 
     { 
         if ( !$this->dislike ) 
             return ''; 
         else 
             return $this->dislike; 
     } 
  } 
?>

