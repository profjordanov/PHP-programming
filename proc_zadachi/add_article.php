<?php
session_start();
include 'db.php';
/*
???????? SQL ??????, ????? ?? ?????? ???? ??????.
 ???????????? ???????? ?? ??????????? ??:
$_POST['articleText']
$_POST['articleTitle']}
? ????? ?? ?? ??????? ? $_SESSION['valid_user_id']
*/
 
// $sqlQuery='................';
     $sqlQuery= "INSERT INTO articles (id_user, title, text, date_created	)
     VALUES (
     		'".$_SESSION['valid_user_id']."', '".$_POST['articleTitle']."','".$_POST['articleText']."',date(\"Y-m-d H:i:s\")
     	);
     ";

	 $result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));

if($result){
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'show_article.php';
    header("Location: http://$host$uri/$extra?id_article=".mysqli_insert_id($link));
    exit;
}