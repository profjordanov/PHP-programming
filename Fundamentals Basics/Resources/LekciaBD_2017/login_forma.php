<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
	<title>Instagram</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

	<form method="POST" action="check_login.php">
	<table align="center">
	<tr>
		<td align="left">Име: </td>
		<td><input type="text" name="user" class="kutii" /></td>
	</tr>

	<tr>
		<td align="left">Парола: </td>
		<td> <input type="password" name="pass" class="kutii"/></td>
	</tr>
	<tr>
		<td align="left">&nbsp;</td>
		<td align="left"><input type="checkbox" name="remember_me" id="remember_me" > <label for="remember_me">Запомни ме</label></td>
	</tr>

	<tr>
		<td>&nbsp; </td>
		<td align="right"> <input type="submit" value="Вход" /></td>
	</tr>
	 
	 

	</table>
	</form>

<?php
if (isset($_GET['err'])) {
$err_code=$_GET['err'];
switch ($err_code)
{
case 1:
  echo '<img src="police.jpg" />Грешно потребителско име и/или парола!';
  break;
case 2:
  echo 'Излязохте успешно от системата';
  break;
default:
  echo 'Възникна неочаквана грешка!';
}

}
?>
</body>
</html>