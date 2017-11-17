<html>
  <head>    
    <title>Всички</title>
  </head>
  <body>
<?php
$hours = array('00','01','02','03','04','05','06','07','08','09','10','11','12',
'13','14','15','16','17','18','19','20','21','22','23');
$minutes= array('00','15','30','45');

$cities=array('Варна','София','Бургас','Тетевен');
$genders=array('Мъж','Жена');

$ranks = array('A','2','3','4','5','6','7','8','9','10','J','Q','K');
$suits = array('Spades','Hearts','Diamonds','Clubs');
?>
    <form method="post" action="post-zad.php" enctype="multipart/form-data">
      <table>
        
		<tr>
          <td>Пол:</td>
          <td>
		  <?php
		  foreach($genders as $gender){
				echo "<input name=\"gender\" type=\"radio\" id=\"$gender\" value=\"$gender\" /><label for=\"$gender\">$gender</label>";
			}
		  ?>
		  </td>
        </tr>
		
		
		<tr>
          <td>Кои от изброените градове сте посещавали?</td>
          <td>
		   <?php
		  foreach($cities as $city){
				echo "<input name=\"chcity[]\" type=\"checkbox\" id=\"ch$city\" value=\"$city\" /><label for=\"ch$city\">$city</label>";
			}
		  ?>
		  </td>
        </tr>
		
		<tr>
          <td colspan="2" ><input type="submit" value="Изпрати"/></td>
          
        </tr>
      </table>	
	<h1>Exercise 4</h1>
<?php
foreach($suits as $suit)
{
	foreach($ranks as $rank)
	{
		echo "<input name=\"chrank[]\" type=\"checkbox\" id=\"ch$rank$suit\" value=\"$rank $suit\"/><label for=\"ch$rank$suit\">$rank <img src=\"./$suit.jpg\"/></label>";
	}
	echo "<br>";
}

?>	  

	<h1>Exercise 6</h1>
    <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
    </form>

  </body>
</html>
