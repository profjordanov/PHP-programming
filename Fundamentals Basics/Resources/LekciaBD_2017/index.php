<?php
session_start();
if (isset($_COOKIE['username']) && isset($_COOKIE['password']) && empty($_SESSION['valid_user'])){ //проверява дали има зададена бисквитка и дали потребителят вече не е логнат

$host  = $_SERVER['HTTP_HOST'];//името на хоста от глобалния асоциативен масив $_SERVER
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');//името на хоста от глобалния асоциативен масив $_SERVER
$extra = 'check_login.php';//файл към който да се извърши пренасочването
header("Location: http://$host$uri/$extra"); //пренасочване към скрипта за качване на файлове
exit; 
}

if (!empty($_SESSION['valid_user'])){ //проверява дали е създадена сесийната променлива т.е. дали проверката е премината успешно

$host  = $_SERVER['HTTP_HOST'];//името на хоста от глобалния асоциативен масив $_SERVER
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');//името на хоста от глобалния асоциативен масив $_SERVER
$extra = 'add_img.php';//файл към който да се извърши пренасочването
header("Location: http://$host$uri/$extra"); //пренасочване към скрипта за качване на файлове
exit;
}
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = 'login_forma.php';
		header("Location: http://$host$uri/$extra"); //пренасочване към логин форма
		exit;
?>