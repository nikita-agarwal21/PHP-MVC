<?php



require_once 'Continent.php';
require_once 'ContinentDao.php';
require_once 'DatabaseUtilities.php';



class ContinentDaoImpl implements ContinentDao
{
    public function search($name)
    {
        $continent=false;
        $connection=DatabaseUtilities::getConnection('place');

        $sql='select * from continent where name=?';
        $statement=$connection->prepare($sql);
        $statement->bind_param('s',$name);


        if($statement->execute())
        {
            $statement->bind_result($continent_code,$name);

            if($statement->fetch())
            {
                $continent=new Continent($continent_code,$name);
            }
        }
  
    $statement->close();
    $connection->close();

    return $continent;
}

}

















?>