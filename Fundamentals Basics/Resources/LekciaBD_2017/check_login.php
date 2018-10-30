<?php
include('db.php');
function set_session($username,$id_user){
		session_start();
		$_SESSION['valid_user'] = $username;
		$_SESSION['valid_user_id'] =$id_user;
}
 
if (isset($_POST['user']) && isset($_POST['pass'])) //този код се изпълнява ако файла се достъпва от формата за логин и са зададени името и паролата
{ 
	$username=$_POST['user'];
	$password=$_POST['pass'];

	$sqlQuery= 'select id,password(upass),password(uname) as uname_enc from users '
			   ."where uname='$username' "
			   ." and upass='$password'";	
			   
	/*при криптирана парола
	$sqlQuery= 'select id from users '
			   ."where uname='$username' "
			   ." and upassenc = password('".$password."') ";
		*/	   		  

	$result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));
	 if (mysqli_num_rows($result) ==1 ){
		$row = mysqli_fetch_array($result);
		set_session($username,$row[0]);
		
		if(isset($_POST['remember_me'])) {
			setcookie ('username', $row[2], time()+60*60*60*24); 
			setcookie ('password', $row[1], time()+60*60*60*24); 
		}
	  }
}

if (isset($_COOKIE['username']) && isset($_COOKIE['password']) && empty($_SESSION['valid_user'])){

$c_username=$_COOKIE['username'];
$c_password=$_COOKIE['password'];
$sqlQuery= 'select id,uname from users '
			   ."where password(uname)='$c_username' "
			   ." and password(upass)='$c_password'";	

$result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));
 if (mysqli_num_rows($result) ==1 ){
	$row = mysqli_fetch_array($result);
	set_session($row['uname'],$row['id']);
  }
}

if (!empty($_SESSION['valid_user'])){ //проверява дали е създадена сесийната променлива т.е. дали проверката е премината успешно

$host  = $_SERVER['HTTP_HOST'];//името на хоста от глобалния асоциативен масив $_SERVER
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');//името на директорията от глобалния асоциативен масив $_SERVER
$extra = 'add_img.php';//файл към който да се извърши пренасочването
header("Location: http://$host$uri/$extra"); //пренасочване към скрипта за качване на файлове
exit;
}else
  {
    if (isset($username)) //ако е зададено име, но комбинацията име и парола е грешно
    {      
		$host  = $_SERVER['HTTP_HOST']; //името на хоста от глобалния асоциативен масив $_SERVER
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); //името на текущата директория
		$extra = 'login_forma.php?err=1'; //файл към който да се извърши пренасочването, като get параметър е подаден err със стойност 1		
		header("Location: http://$host$uri/$extra"); //пренасочване към login форма и код за грешка
		exit;	  
      
    }
    else
    {
      //при опит за директен достъп до тази страница се извършва пренасочване към формата за логин
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = 'login_forma.php';
		header("Location: http://$host$uri/$extra"); //пренасочване към логин форма
		exit;	  
    }


  }


?>