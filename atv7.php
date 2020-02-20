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
        Numero 1: <input id=1 type="float" name="1"><br>
        Numero 1: <input id=2 type="float" name="2"><br>
        <input type="submit">
    </form>
  </body>
</html> 

<?php
	if ($_POST) {
		for($i = ++$_POST[1]; $i<$_POST[2]; $i++) {
			echo "$i ";
		}
	}
?>