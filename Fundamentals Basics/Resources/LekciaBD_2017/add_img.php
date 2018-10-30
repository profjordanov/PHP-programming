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
<form enctype="multipart/form-data" method="POST">
Изберете снимка за качване: <input type="file" name="mainpic" />
<input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
<input type="submit" />
</form>
<br/><a href="list_pics.php">Списък снимки</a><br/>
<?php
//print_r($_COOKIE);
if (!empty($_FILES)){
  $userfile = $_FILES['mainpic']['tmp_name'];
  $userfile_name = $_FILES['mainpic']['name'];
  $userfile_size = $_FILES['mainpic']['size'];
  $userfile_type = $_FILES['mainpic']['type'];
  $userfile_error = $_FILES['mainpic']['error'];
  if ($userfile_error > 0 && $userfile_error<=4)
  {
    echo 'Възникна следния проблем: ';
    switch ($userfile_error) //http://php.net/manual/en/features.file-upload.errors.php
    {
	  case 1: 
      case 2:  echo 'Твърде голям файл';  break;
      case 3:  echo 'Файлът е частино качен';  break;
      case 4:  echo 'Файлът не е качен';  break;
	  case 6:  echo 'Файлът не е качен. Проблем при достъпа до временната директория';  break;
	  case 7:  echo 'Файлът не е качен. Проблем при запис на диска.';  break;	  
    }
    exit;
  }

if ($userfile_size>10*1024*1024){
echo "Максимално допустимия размер  10 мб)";
exit;
}

if ($userfile_type!='image/jpeg' && $userfile_type!='image/pjpeg' 
&& $userfile_type!='image/x-png' && $userfile_type!='image/png' 
&& $userfile_type!='image/gif'){
	echo "Разрешено е качването само на снимки ";
	exit;
	}
// поставяме файла в директория pics
$today = date('jnYHis'); //днешна дата с точност до секундата
$userfile_name = str_replace(" ", "_", $userfile_name); //премахват се интервали от името на файла
$upfile = "pics/$today$userfile_name"; //новото име на файла ще бъде комбинация от датата с точност до секундата и потребителското име
		

if (!move_uploaded_file($userfile, $upfile)) //премества временния файл в зададената директория и го преименува
	{
	echo 'Проблем при запис в директорията';
	exit;
	} else 
		 {
		include('db.php'); 
		  $sqlQuery= "INSERT INTO `users_pics` (
		`id_user` ,
		`pic_src` 
		)
		VALUES (
		'".$_SESSION['valid_user_id']."', '$upfile'
		);
		";

		$result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));
		 echo "Файлът  <img src='$upfile' />$userfile_name беше качен успешно";

		 chmod("$upfile", 0777); //даване на пълни права за достъп до файла

		}	

}

?>
<br/><a href="logout.php">Изход</a><br/>

</head>
</html>