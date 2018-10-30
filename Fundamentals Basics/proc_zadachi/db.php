<?php
$sql_host='localhost';
$sql_user='root';
$sql_pass='';
$sql_database='guitars';

$link = mysqli_connect($sql_host,$sql_user,$sql_pass,$sql_database) or die();
mysqli_set_charset($link, 'utf8-unicode');
?>