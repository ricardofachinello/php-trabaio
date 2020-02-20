<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <style>
    </style>
    <title>Atividade 4</title>
  </head>
  <body>
    <form action="#" method="post">
        Numero: <input id=1 type="float" name="1"><br>
        <input type="submit">
    </form>
  </body>
</html> 

<?php
  if ($_POST) {
		for($i = 0; $i <= $_POST[1]; $i++) {
			echo "$i ";
		}
	}
?>