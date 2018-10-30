<?php
session_start();

if(!isset($_SESSION['valid_user'])) {	
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = 'login.php';
		header("Location: http://$host$uri/$extra"); //???????????? ??? ????? ?????
		exit;
}
?>
<html>
<body>
<p>My Secret Web Page!!!! </p>
<?php
$username=$_SESSION['valid_user'];
echo "Hello, $username</br>";
?>
</body>
</html>