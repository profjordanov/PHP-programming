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
    <?php
    for ($i = 0; $i< 5; $i++){
        print 'File: <input type="file" name="upload[]" /></br>';
    }
    ?>

    <input type="submit">
</form>
<?php
while(list($k,$v) = each($_FILES['upload']['error'])){
    if ($v == UPLOAD_ERR_OK){
        if (move_uploaded_file($_FILES['upload']['tmp_name'][$k],
            getcwd().'/'. $_FILES['upload']['name'][$k])){
            print $_FILES['upload']['name'][$k] . 'was uploaded';
        }else{
            print ('There is some error!');
        }
    }
}
?>
</body>
</html>