<?php

require_once 'Skill.php';
require_once 'SkillDao.php';
require_once 'DatabaseUtilities.php';
require_once 'EmployeeNotFoundException.php';


class SkillDaoImpl implements SkillDao
{
 

public function searchSkill($skillCodes)
    {
//    

$flag=false;
$sql='select * from skills where ';
foreach($skillCodes as $skillcode)
{
    if($flag == false)
    {
        $sql=$sql."skill_code = "."'".$skillcode."'";
        $flag=true;
    }
    else 
    $sql=$sql."or skill_code = "."'".$skillcode."'";
}




$langs=array();

$connection=DatabaseUtilities::getConnection('companyy');


$resultSet=$connection->query($sql);

if ( !empty($resultSet) && $resultSet->num_rows > 0)
{
while($row=$resultSet->fetch_assoc())
{
$skillcode=new Skill($row['skill_code'],$row['lang']);

$langs[]=$skillcode->getLang();

}
}
 
return $langs;
    }
   
}

    ?>