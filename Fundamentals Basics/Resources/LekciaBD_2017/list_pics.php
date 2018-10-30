<?php
session_start();
if(!isset($_SESSION['valid_user'])) {	
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = 'login_forma.php';
		header("Location: http://$host$uri/$extra"); //пренасочване към логин форма
		exit;
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include('db.php'); //включване на кода за връзка с базата данни от db.php
$sqlQuery= 'SELECT * FROM users_pics
where id_user='.$_SESSION['valid_user_id']
;
$result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));
if($result) {
				while ($row = mysqli_fetch_array($result)) {
					echo "<img src='{$row["pic_src"]}' /> <br> \n"; 					  
				}
			}
	
?>
<br/><a href="logout.php">Изход</a><br/>
</head>
</html>