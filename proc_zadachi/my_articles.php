<?php

// кодът на логнатия потребител е записан в $_SESSION['valid_user_id'], за да имате 
//достъп до нея е необходимо да стартирате сесия!!!!
//желателно е стартирането на сесия да се извърши в началото на файла (преди изпращане на каквато и да е друга информация към браузъра)
session_start();
include 'db.php';
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <title>Китари</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/offcanvas.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            
            <a class="navbar-brand" href="#">Китари</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Начало</a></li>
                
                <?php
                if (isset($_SESSION['valid_user']))
                {
                    echo '<li><a href="make_article.php">Напиши статия</a></li>';
                    echo '<li><a href="register.php">Редактирай профил</a></li>';
					echo '<li><a href="my_articles.php">Моите статии</a></li>';
                    echo '<li><a href="logout.php">Излез</a></li>';
                }
                else
                {
                    echo '<li><a href="register.php">Регистрация</a></li>';
                    echo '<li><a href="login.php">Вход</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>
            <div class="jumbotron">
                <?php
                /*
				напишете SQL заявка, която да извлича всички статии на логнатия потребител
				$sqlQuery='......';
				*/
                $sqlQuery= 'SELECT * FROM articles
                            where id_user='.$_SESSION['valid_user_id'];


                $result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));
				if($result) {
								while ($article = mysqli_fetch_array($result)) {
									echo '<h1>' . $article['title'] . '</h1>';
									if(file_exists($article['pic']))
									echo '<img src="images/' . $article['pic'] . '"><br>';
									echo '<p>' . $article['text'] . '</p>'; 
									echo "<p><a href='show_article.php?id_article={$article['id']}'>Разгледай</a>
									<a href='edit_article.php?id_article={$article['id']}'>Редактирай</a></p>";									
								}
							}                
                
                ?>
                
            </div>
        </div>

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
            <div class="list-group">
                <?php
				$sqlQuery='SELECT * FROM Articles';
               $result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));
                if($result) {
				while ($article = mysqli_fetch_array($result)) {
                    echo '<a href="show_article.php?id_article=' . $article['id'] .
                        '" class="list-group-item">' . $article['title'] . '</a>';
                }
				}
                ?>
                <!-- <a href="#" class="list-group-item ">Link</a>-->

            </div>
        </div>
    </div>
    <footer>
    </footer>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/offcanvas.js"></script>
</body>
</html>
