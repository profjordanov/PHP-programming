<!doctype html>
<html lang="1">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
if (isset($_GET['color']) and $_GET['color'] != ''){
    $color = $_GET['color'];
    setcookie('COLOR', $color, time()+60*60*24);
    print ('Cookie is set!');
}elseif (isset($_COOKIE['COLOR'])){
    $color = $_COOKIE['COLOR'];
    print ('TAKEN from HTTP');
}else  {
    $color = 'white';
    print "$color is the default!";
}

?>
<body bgcolor="<?php print $color; ?>">
<form action="">
    COLOR: <input type="color" name="color">
    <input type="submit">
</form>
<a href="bgcolor.php">RELOAD</a>
</body>
</html>
