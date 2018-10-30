<?php
session_start();
?>
<html>
<meta charset='utf8'/>
<body>
<?php
$username=$_SESSION['valid_user'];
echo "<p> GoodBye! $username you logout with succsess!</p>"
?>
<?php
$_SESSION = array();
session_destroy();
?>
</body>
</html>
