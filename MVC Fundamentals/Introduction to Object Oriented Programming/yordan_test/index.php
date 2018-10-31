<?php 	
	include "Vehicle.php";
	include "Тruck.php";
	include "Car.php";

	

	$zil = new Тruck(2,4);
	$fordMustang = new Car(4,2);
	echo "<br>Hi! My name is Zil. I am a tuck! My loadability is ". $zil->getLoadability()." tones and ". $zil->getSeats()." seats!";
	echo "<br>Hi! My name is Ford Mustang. I am a car! I have ". $fordMustang->getDoors()." doors and ". $fordMustang->getSeats()." seats!";
	echo "<br>";
	echo $zil;
?>