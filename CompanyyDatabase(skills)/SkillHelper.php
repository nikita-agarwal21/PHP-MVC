
<?php 
  class SkillHelper 
  { 
    private $skills;

    public function __construct() 
    { 
       if ( isset($_POST['skills'])) 
       { 
         $this->skills = $_POST['skills']; 
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
  
  } 
?>