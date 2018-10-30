<?php
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
                <h1>Five Headphone Songs Guaranteed to Blow Your Mind</h1>
			<p> Headphone technology seems to be getting better every day.

Recently, Ceekars (pronounced “seekers”) developed what it's calling the world’s first 4D headphones, and the aural experience is trippy, to say the least.

The company recently reached out to Guitar World and asked us to suggest some music that would put their radically new concept to the test. We responded with the following five tracks.

While these sound amazing using Ceekars 4D technology, they also sound great even using the most modest ear buds. Enjoy!


Grateful Dead, “Unbroken Chain”

This epic tune on the Dead’s From The Mars Hotel was so difficult for the band to play that it had to be recorded in carefully orchestrated sections.

Filled with cascading piano licks, jazzy guitar runs that dance in both sides of the stereo spectrum and weird synth burbles that tease the top of the brain, it’s the perfect headphone experience—especially when you’re “Truckin’” where it’s legal. </p>				
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
