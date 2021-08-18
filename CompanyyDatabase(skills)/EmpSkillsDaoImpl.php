<?php



require_once 'EmpSkills.php';
require_once 'EmpSkillsDao.php';
require_once 'DatabaseUtilities.php';



class EmpSkillsDaoImpl implements EmpSkillsDao
{
    public function searchEmpId($skillCodes)
    {
 $flag=false;
 $sql='select empid from empskills where ';
 foreach($skillCodes as $skillcode)
 {
     if ($flag== false)
     {
         $sql=$sql."skill_code = "."'".$skillcode."'";
         $flag=true;
     }
     else
      $sql=$sql ." or skill_code = "."'".$skillcode."'";
 }
$sql=$sql."group by empid having count(*)=".count($skillCodes);
          

        $skillCodes=array();
        $connection=DatabaseUtilities::getConnection('companyy');

        $resultSet=$connection->query($sql);

        if ($resultSet->num_rows > 0)
    {
while($row=$resultSet->fetch_assoc())
{
    $skillcode=new EmpSkills($row['empid']);
$skillCodes[]=$skillcode;

} 
        }
        else
        throw new EmployeeNotFoundException();
$resultSet->close();
$connection->close();

    return $skillCodes;
}

}






?>