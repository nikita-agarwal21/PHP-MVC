

<?php

require_once 'Skill.php';
require_once 'SkillDao.php';
require_once 'SkillDaoImpl.php';

require_once 'EmpSkills.php';
require_once 'EmpSkillsDao.php';
require_once 'EmpSkillsDaoImpl.php';

require_once 'Employee.php';
require_once 'EmployeeDao.php';
require_once 'EmployeeDaoImpl.php';
require_once 'EmployeeNotFoundException.php';
$results = array();
$message=false;

     if ( isset($_POST['skills']))
     {
          try{
          $skillCodes= $_POST['skills'];
   
          $skillDao = new SkillDaoImpl();
   
        $langs=$skillDao->searchSkill($skillCodes);
       
        $_POST['lang']=$langs;

       //$skills=$skillDao->searchSkill($skill_code);
      
       $empskillsDao=new EmpSkillsDaoImpl();
              $results=$empskillsDao->searchEmpId($skillCodes);
          } 
   
 
   catch(EmployeeNotFoundException $enfe) 
   {
   $message="no such employees with these skills found";
   }

   $_POST['message']=$message;
    
     $_POST['results'] = $results;
}
include 'SkillMVC.php';
?>










   

    
   
   
