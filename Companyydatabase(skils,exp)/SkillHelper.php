
<?php 
  class SkillHelper 
  { 
    private $skills,$exp;

    public function __construct() 
    { 
       if ( isset($_POST['skills'])) 
       { 
         $this->skills = $_POST['skills']; 
       } 
       
       if ( isset($_POST['exp'])) 
       { 
         $this->exp = $_POST['exp']; 
       } 
    }

   

   public function isSkillChecked($par) 
    { 
        if ( !$this->skills ) 
            return ''; 
        foreach ( $this->skills as $ski)
             if ( $ski == $par )
             return  'checked'; 
          
        return '';  
    } 
  
    public function isExp() 
    { 
        if ( !$this->exp ) 
            return ''; 
  
       else 
       return $this->exp;
    } 
  
    



    

  } 
?>