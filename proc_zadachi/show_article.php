<?php
session_start();
if (isset($_SESSION['valid_user_id'])){
$id_user = $_SESSION['valid_user_id'];
} else $id_user=0;
$id_article = isset($_GET['id_article']) ? $_GET['id_article'] : 0;
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
                $sqlQuery= 'SELECT * FROM articles where id='.$id_article;
				$result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));
				if($result) {
								while ($article = mysqli_fetch_array($result)) {
									echo '<h1>' . $article['title'] . '</h1>';
									if(file_exists($article['pic']))
									echo '<img src="images/' . $article['pic'] . '"><br>';
									echo '<p>' . $article['text'] . '</p>';
								}
							}
				
				/*
				тук напишете кода който да извлича и показва всички коментари към текушата статия
				
				*/
				echo '<h3> <strong>Comments:</strong> </h3>';
                $innerSqlQuery= 'SELECT *
                                  FROM comments c
                                  where id_article='.$id_article;
                $innerResult = mysqli_query($link, $innerSqlQuery) or die(mysqli_error($link));
                if($result) {
                    while ($comment = mysqli_fetch_array($innerResult)) {
                        echo '<div style="border:  solid black 2pt">';
                        echo '<h4>' . $comment['title'] . '</h4>';
                        echo '<h6>' . $comment['text'] . '</h6>';
                        echo '</div>';
                        echo '<hr>';
                    }
                }
                
                if($id_user>0) { ?>
             <div class="comments">
			 Добави коментар
				<form method="post" action="add_comment.php">
				<input type="text" id="commentTitle" name="commentTitle" />
				<label for="commentTitle" />Заглавие</label><br/>
				<textarea cols="50" rows="10" name="commentText" id="commentText">
				</textarea><br/>
				<input type="hidden" name="articleId" value="<?php echo "$id_article";?>" />
				<input type="submit" value="Изпрати">
				</form>
			</div>
				<?php
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
