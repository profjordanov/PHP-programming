<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

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
        <!-- /.nav-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- /.navbar -->

<div class="container">

    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>
            <div class="jumbotron">
                <?php

                if (isset($_POST['username']) && isset($_POST['password'])) //този код се изпълнява ако файла се достъпва от формата за логин и са зададени името и паролата
                {
                    $username=$_POST['username'];
                    $password=$_POST['password'];
					
                    $sqlQuery = "SELECT id FROM users WHERE usrname='{$username}'
                        AND psw='{$password}'";
						$result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));
                    if (mysqli_num_rows($result)> 0)
                    {
                        $user = mysqli_fetch_array($result);
                        session_start();
                        $_SESSION['valid_user'] = $username;
                        $_SESSION['valid_user_id'] = $user['id'];
                    }

                    if (!empty($_SESSION['valid_user']))
                    {
                        echo '1';
                        $host  = $_SERVER['HTTP_HOST'];
                        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                        $extra = 'my_articles.php';
                        header("Location: http://$host$uri/$extra");
                        exit;
                    }
                    else if(isset($username))
                    {
                        echo '2';
                        $host  = $_SERVER['HTTP_HOST'];
                        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                        $extra = 'login.php?err=1';
                        header("Location: http://$host$uri/$extra");
                        exit;
                    }
                    else
                    {
                        echo '3';
                        $host  = $_SERVER['HTTP_HOST'];
                        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                        $extra = 'login.php';
                        header("Location: http://$host$uri/$extra");
                        exit;
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
        <!--/.sidebar-offcanvas-->
    </div>
    <!--/row-->


    <footer>
    </footer>

</div>
<!--/.container-->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!--<script src="../../dist/js/bootstrap.min.js"></script>-->

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->

<script src="js/offcanvas.js"></script>
</body>
</html>
