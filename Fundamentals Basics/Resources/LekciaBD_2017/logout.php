<?php
session_start();
$_SESSION = array();
session_destroy();

setcookie ('username','', time()-1); 
setcookie ('password','', time()-1); 

$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'login_forma.php';
header("Location: http://$host$uri/$extra?err=2"); //пренасочване към логин форма
exit;
?>