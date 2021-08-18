<?php



require_once 'Country.php';
require_once 'CountryDao.php';
require_once 'DatabaseUtilities.php';



class CountryDaoImpl implements CountryDao
{
    public function search($continent_code)
    {
        $country=array();
        $connection=DatabaseUtilities::getConnection('place');

        $sql='select * from country where continent_code=?';
        $statement=$connection->prepare($sql);
        $statement->bind_param('i',$continent_code);


        if($statement->execute())
        {
            
$resultstmt=$statement->get_result();
while($row=$resultstmt->fetch_assoc())
{
    $result=new Country($row['country_code'],$row['name'],$row['area'],$row['capital'],$row['population'],$row['horbour'],$row['island'],$row['continent_code']);
$country[]=$result;
}


/*$statement->bind_result($country_code,$name,$area,$capital,$population,$horbour,$island,$continent_code);
while($statement->fetch())
{
    $connt=new Country($country_code,$name,$area,$capital,$population,$horbour,$island,$continent_code);
    $country[] = $connt;

}*/

          /* $statement->bind_result($country_code,$name,$area,$capital,$population,$horbour,$island,$continent_code);

            if($statement->fetch())
            {
                $country=new Country($country_code,$name,$area,$capital,$population,$horbour,$island,$continent_code);
            }   
      */
        }
  
    $statement->close();
    $connection->close();

    return $country;
}

}






?>