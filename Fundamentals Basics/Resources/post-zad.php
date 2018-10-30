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
	
	
	//Пример 2
	if (isset($_POST['gender'])) echo "<p> Вие сте {$_POST['gender']}.</p>";
	
	//Пример 3
	if (isset($_POST['chcity'])) {
		$vcities='';
		foreach($_POST['chcity'] as $city){
				$vcities.=" $city,";		
			}
			$vcities=substr($vcities,0,-1);
			echo "<p> Посещавали сте $vcities.</p>";
	//Пример 4
	$sql_query='insert into users_cities(city) values';
	foreach($_POST['chcity'] as $city){
		$sql_query.="('$city'),";		
	}
	$sql_query=substr($sql_query,0,-1);
	echo "<p>$sql_query</p>";
	
	}	
	//Exer 5
	if(isset($_POST['chrank'])){
		echo "Selected cards: ";
		$sql_query2='insert into users_cities(city) values';
		foreach($_POST['chrank'] as $rank){
			$ranks = explode(" ", $rank);
			echo "<label>$ranks[0] <img src=\"./$ranks[1].jpg\"/></label>";
			$sql_query2.="('$rank'),";
		}
		$sql_query2=substr($sql_query2,0,-1);
		echo "<p>$sql_query2</p>";
	}

	//exr 6
	

$uploaddir = 'D:\\xampp\\htdocs\\jordan\\';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}
echo "<img src=\"$_FILES['userfile'],$uploadfile\"";

echo 'Here is some more debugging info:';
print_r($_FILES);

print "</pre>";
   
    ?>
  </body>
</html>
