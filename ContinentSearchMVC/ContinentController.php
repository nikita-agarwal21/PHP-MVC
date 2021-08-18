
<?php
 require_once 'ContinentDaoImpl.php';

 require_once 'Continent.php';
 require_once 'ContinentDao.php';
 require_once 'LangDaoImpl.php'; 
 require_once 'CountryDaoImpl.php';
 
 require_once 'Lang.php';
 require_once 'LangDao.php';

 
 require_once 'Country.php';
 require_once 'CountryDao.php';
 require_once 'DatabaseUtilities.php';
 
$continent = false;
if ( isset($_POST['name']))
{
   $name=$_POST['name'];

   $continentDao= new ContinentDaoImpl();
       $continent=$continentDao->search($name);
       
       $_POST['continent']=$continent;
}

include 'ContinentMVC.php';
?>

    
   
   
