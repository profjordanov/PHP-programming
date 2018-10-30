<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" enctype="multipart/form-data" method="POST">
    File: <input type="file" name="upload">
    <input type="submit">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === "POST"){
    if (move_uploaded_file($_FILES['upload']['tmp_name'],
        getcwd().'/'. $_FILES['upload']['name'])){
        print $_FILES['upload']['name'] . 'was uploaded';
    }else{
        print ('There is some error!');
    }
}
?>
</body>
</html>