<?php
session_start();
include 'db.php';
$sqlQuery= "INSERT INTO `comments`(`id_article`, `id_user`, `title`, `text` )
     VALUES('{$_POST['articleId']}', '{$_SESSION['valid_user_id']}', 
	 '{$_POST['commentTitle']}', '{$_POST['commentText']}')";
$result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));

if($result){
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'show_article.php';
    header("Location: http://$host$uri/$extra?id_article=". $_POST['articleId']);
    exit;
}
