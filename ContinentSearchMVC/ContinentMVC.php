
 

<?php
    require_once 'ContinentHelper.php';
    $continentHelper = new ContinentHelper();

    $continent = false;
    if ( isset($_POST['continent']))
         $continent = $_POST['continent'];
?>

<html>
  <head>
  <style>
  
  form{
      color:white;
  }

table{
color:white;
border:white;
}

</style >

  </head>

  <body style='background-color:blue'>
    <form name="continentForm" method="post" action="ContinentController.php" >
    <br>
    <br>
    <center>
    Continent : 
    <select name="name">
      <option value='australia' <?php echo $continentHelper->isContinentSelected('australia'); ?>>australia</option>
      <option value='asia' <?php echo $continentHelper->isContinentSelected('asia'); ?>>asia</option>
      <option value='europe' <?php echo $continentHelper->isContinentSelected('europe'); ?>>europe</option>
      <option value='north america' <?php echo $continentHelper->isContinentSelected('north america'); ?>>north america</option>
      <option value='south america' <?php echo $continentHelper->isContinentSelected('south america'); ?>>south america</option>
      <option value='africa' <?php echo $continentHelper->isContinentSelected('africa'); ?>>africa</option>
    </select>
    <br>
    <br>
    <input type="submit" value="Submit" />
    </center>
    <br>
    <br>
    <?php
    $country=false;
         if ( $continent)
   {
           
            $langDao=new LangDaoImpl();
            $countryDao=new CountryDaoImpl();

        ?>
        <br><br>
        <center><table border='1'>
         <tr><th>country code</th><th>country name</th><th>area</th><th>capital</th><th>population</th><th>language</th><th>horbour</th><th>island</th></tr>
         <?php
          


 
     $country=$countryDao->search($continent->getContinentCode());
    
         }
    if($country)
    {
    foreach($country as $coun)
    {?>
    <tr><td><?php echo $coun->getCountryCode()?></td>
    <td> <?php echo $coun->getName()?></td>
    <td> <?php echo $coun->getArea()?></td>
    <td> <?php echo $coun->getCapital()?></td>
    <td> <?php echo $coun->getPopulation()?></td>
    <?php
$lang=$langDao->searchLang($coun->getCountryCode());

  ?>
  <td><?php foreach($lang as $language)

 

{
 echo $language->getLangType().',';
  }?></td>

 
    <td> <?php echo $coun->getHorbour()?></td>
    <td> <?php echo $coun->getIsland()?></td>
<?php
    
    
    
    ?>
    
   
    
        <?php
       }  }
           
    ?>
</tr></center></table>
    </form>
  </body>
</html>


 


 








 