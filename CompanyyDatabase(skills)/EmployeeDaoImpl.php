<?php

require_once 'Employee.php';
require_once 'EmployeeDao.php';
require_once 'DatabaseUtilities.php';
require_once 'EmployeeNotFoundException.php';

class EmployeeDaoImpl implements EmployeeDao
{
 

public function search($empid)
    {
//       
$employees=array();

          $connection = DatabaseUtilities::getConnection("companyy");

          $sql = "select   * from employee where empid= ? ";
          $statement = $connection->prepare($sql);
           
          $statement->bind_param("i",$empid);

          if ( $statement->execute() )
          {
           $statement->bind_result($empid, $name, $gender,$qualification,$experience,$relocation,$jointime);
           if($statement->fetch())
           {
               $employee=new Employee($empid, $name, $gender,$qualification,$experience,$relocation,$jointime);
               $employees[]=$employee;
           }  

           else
           throw new EmployeeNotFoundException();
}


          $statement->close();
$connection->close();
          return $employees;
        
    }
}
    ?>