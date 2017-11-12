<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
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
                <form method="POST" action="check_login.php">
                    <table>
                        <tr>
                            <td><label for="username">Име:</label></td>
                            <td><input type="text" name="username" id="username"/></td>
                        </tr>
                        <tr>
                            <td><label for="password">Парола:</label></td>
                            <td><input type="password" name="password" id="password"/></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Вход"/></td>
                            <td></td>
                        </tr>
                    </table>
                </form>
                <br/>
                <?php
                if (isset($_GET['err']))
                {
                    $err_code = $_GET['err'];
                    switch ($err_code)
                    {
                        case 1:
                            echo '<img src="police.jpg" />Грешно потребителско име и/или парола';
                            break;
                        case 2:
                            echo 'Излязохте успешно от системата';
                            break;
                        default:
                            echo 'Възникна неочаквана грешка!';
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
