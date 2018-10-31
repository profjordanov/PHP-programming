<?php
spl_autoload_register(function($class_name){
    include($class_name.'.php');
});
$notebook = new Notebook();
$notebook->pressKey('z');
$notebook->pressKey('d');
$notebook->pressKey('r');
$notebook->pressKey('a');
$notebook->pressKey('s');
$notebook->pressKey('t');
$notebook->pressKey('i');
$notebook->pressKey('!');
echo $notebook->getWrittenText()."<br>";
$notebook->pressKey('Backspace');
echo $notebook->getWrittenText();