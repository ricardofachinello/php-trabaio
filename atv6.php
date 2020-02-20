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
  $x = 1;
	if($_POST) {
		for($i=$_POST[1]; $i>=1; $i--) {
			$x=$x*$i;
		}
    echo "Fatorial: $x";
	}
?>