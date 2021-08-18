<?php



require_once 'Lang.php';
require_once 'LangDao.php';
require_once 'DatabaseUtilities.php';



class LangDaoImpl implements LangDao
{
    public function searchLang($country_code)
    {
        $lang=array();
        $connection=DatabaseUtilities::getConnection('place');

        $sql='select * from lang where country_code=?';
        $statement=$connection->prepare($sql);
        $statement->bind_param('i',$country_code);


        if($statement->execute())
        {
        /* $statement->bind_result($lang_type,$country_code);

            if($statement->fetch())
            {
                $lang=new Lang($lang_type,$country_code);
            }
          */

          $resultstmt=$statement->get_result();
            while($row=$resultstmt->fetch_assoc())
            {
            $result=new Lang($row['lang_type'],$row['country_code']);
            $lang[]=$result;
            }
            
       
            
        }
  
    $statement->close();
    $connection->close();

    return $lang;
}

}













?>