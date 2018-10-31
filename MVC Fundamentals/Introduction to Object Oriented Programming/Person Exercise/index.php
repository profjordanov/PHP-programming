<?php 

include("class_lip.php");

	$Jonny = new Person("Jonny","1.95");


		echo "Hi! My name is ". $Jonny->get_name();

	$Jonny->set_name("Jonny Smith");

	echo "<br>Hi! My name is ". $Jonny->get_name()." and my height is ".$Jonny->get_height()."m";

	/*$Nasko = new Employee("Nasko","1.86");

	echo "<br>Hi! My name is ". $Nasko->get_name()." and my height is ".$Nasko->get_height()."m";*/

    $Nasko = new Employee("Nasko","1.86","2000");

    echo "<br>Hi! My name is ". $Nasko->get_name()." and my height is ".$Nasko->get_height()."m ".$Nasko->get_salary()."lv";

 ?>



