<?php

require_once 'ZodiacHelper.php';
$zodiacHelper=new ZodiacHelper();

//$result=" ";
if(isset($_POST['result']))
$result=$_POST['result'];

?>


<html>
<head><title> astrology </title>

<link href='stylesheet.css' type='text/css' rel='stylesheet'/> 
 </head>
<body>
<form name='ZodiacSignSearch' method='POST' action='ZodiacController.php'>
<div >
<br><br>
<label for ='day'>enter your bith date:</label>

<select name='day' id='day' >
<option value='1'  <?php echo $zodiacHelper->isDaySelected('1'); ?>>1</option><option value='2' <?php echo $zodiacHelper->isDaySelected('2'); ?>>2</option>
<option value='3' <?php echo $zodiacHelper->isDaySelected('3'); ?>>3</option><option value='4' <?php echo $zodiacHelper->isDaySelected('4'); ?>>4</option>
<option value='5' <?php echo $zodiacHelper->isDaySelected('5'); ?>>5</option><option value='6' <?php echo $zodiacHelper->isDaySelected('6'); ?>>6</option>
<option value='7' <?php echo $zodiacHelper->isDaySelected('7'); ?>>7</option><option value='8' <?php echo $zodiacHelper->isDaySelected('8'); ?>>8</option>
<option value='9' <?php echo $zodiacHelper->isDaySelected('9'); ?>>9</option><option value='10' <?php echo $zodiacHelper->isDaySelected('10'); ?>>10</option>
<option value='11' <?php echo $zodiacHelper->isDaySelected('11'); ?>>11</option><option value='12' <?php echo $zodiacHelper->isDaySelected('12'); ?>>12</option>
<option value='13' <?php echo $zodiacHelper->isDaySelected('13'); ?>>13</option><option value='14' <?php echo $zodiacHelper->isDaySelected('14'); ?>>14</option>
<option value='15' <?php echo $zodiacHelper->isDaySelected('15'); ?>>15</option><option value='16' <?php echo $zodiacHelper->isDaySelected('16'); ?>>16</option>
<option value='17' <?php echo $zodiacHelper->isDaySelected('17'); ?>>17</option><option value='18' <?php echo $zodiacHelper->isDaySelected('18'); ?>>18</option>
<option value='19' <?php echo $zodiacHelper->isDaySelected('19'); ?>>19</option><option value='20' <?php echo $zodiacHelper->isDaySelected('20'); ?>>20</option>
<option value='21' <?php echo $zodiacHelper->isDaySelected('21'); ?>>21</option><option value='22' <?php echo $zodiacHelper->isDaySelected('22'); ?>>22</option>
<option value='23' <?php echo $zodiacHelper->isDaySelected('23'); ?>>23</option><option value='24' <?php echo $zodiacHelper->isDaySelected('24'); ?>>24</option>
<option value='25' <?php echo $zodiacHelper->isDaySelected('25'); ?>>25</option><option value='26' <?php echo $zodiacHelper->isDaySelected('26'); ?>>26</option>
<option value='27' <?php echo $zodiacHelper->isDaySelected('27'); ?>>27</option><option value='28' <?php echo $zodiacHelper->isDaySelected('28'); ?>>28</option>
<option value='29' <?php echo $zodiacHelper->isDaySelected('29'); ?>>29</option><option value='30' <?php echo $zodiacHelper->isDaySelected('30'); ?>>30</option>
<option value='31' <?php echo $zodiacHelper->isDaySelected('31'); ?>>31</option>

</select>


<br><br>
<label for ='month'>enter your bith month:</label>

<select name='month' id='month' >
<option value='1' <?php echo $zodiacHelper->isMonthSelected('1'); ?>>1 (JAN)</option><option value='2'  <?php echo $zodiacHelper->isMonthSelected('2'); ?>>2 (FEB)</option>
<option value='3'  <?php echo $zodiacHelper->isMonthSelected('3'); ?>>3 (MARCH)</option><option value='4'  <?php echo $zodiacHelper->isMonthSelected('4'); ?>>4 (APRIL)</option>
<option value='5'  <?php echo $zodiacHelper->isMonthSelected('5'); ?>>5 (MAY)</option><option value='6'  <?php echo $zodiacHelper->isMonthSelected('6'); ?>>6 (JUNE)</option>
<option value='7'  <?php echo $zodiacHelper->isMonthSelected('7'); ?>>7 (JULY)</option><option value='8'  <?php echo $zodiacHelper->isMonthSelected('8'); ?>>8 (AUG)</option>
<option value='9'  <?php echo $zodiacHelper->isMonthSelected('9'); ?>>9 (SEP)</option><option value='10'  <?php echo $zodiacHelper->isMonthSelected('10'); ?>>10 (OCT)</option>
<option value='11'  <?php echo $zodiacHelper->isMonthSelected('11'); ?>>11 (NOV)</option><option value='12'  <?php echo $zodiacHelper->isMonthSelected('12'); ?>>12 (DEC)</option>
</select>

<br><br>

<input type='submit' name='btn_submit' value='submit'/>

<br><br>


<?php

if(isset($result))
{
    
    $fileName = "../images/".$result.".jpg";
    ?>

<div id='image' ><img src="<?php echo $fileName ;?>" height="140" width="160" />
<?php echo '<br><br> zodiac sign : '.$result .'<br>';?>
<?php
}



?>

</div>
</form>


</body>

</html>
