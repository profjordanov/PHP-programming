<html>
  <head>    
    <title>Всички</title>
  </head>
  <body>
   <form method="get" >
      <table>
        <tr>
          <td>Въведете име:</td>
          <td><input type="text" name="username"/></td>
        </tr>
		<tr>
          <td>Въведете години:</td>
          <td><input type="text" name="age" /></td>
		</tr>
		<tr>
          <td colspan="2"><input type="submit" value="Запиши"></td>
		</tr>
	</table>
	<?php
	if (isset($_GET['username']) && isset($_GET['age'])){
		echo 'Вашето име е:'.$_GET['username'].', Вашите години са '.$_GET['age'];
	}
	?>
	</form>
   </body>
</html>
