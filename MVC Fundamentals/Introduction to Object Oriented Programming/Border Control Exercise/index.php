<?php
use Control\Citizens;
use Control\Robots;
use Control\Pet;
use Control\Rebel;

include "iControl.php";
include "iBuyer.php";
include "Citizens.php";
include "Robots.php";
include "Pet.php";
include "Rebel.php";

$arrOfObj = [];
$numberOfPeople = trim(fgets(STDIN));
for ($i = 0; $i <= $numberOfPeople; $i++) {
    $infoLine = explode(" ", trim(fgets(STDIN)));
    if (count($infoLine) == 4) {//“<name> <age> <id> <birthdate>” for a Citizen
        $arrOfObj[] = new Citizens($infoLine[0], $infoLine[1], $infoLine[2], $infoLine[3]);
    } elseif (count($infoLine) == 3) {//<name> <age><group>” for a Rebel
        $arrOfObj[] = new Rebel($infoLine[0], $infoLine[1], $infoLine[2]);
    }
}
print_r($arrOfObj);
$name=trim(fgets(STDIN));
while ($name!="End"){
      foreach ($arrOfObj as $k=>$obj){
          if($k==$name){
               $obj->BuyFood();
          }
      }
    $name=trim(fgets(STDIN));
}
//print_r($arrOfObj);
$unitsFood=0;
foreach ($arrOfObj as $name=>$obj){
    $unitsFood+=$obj->getFood();
}
echo $unitsFood." units food";