<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <style>
    </style>
    <title>Atividade 10</title>
  </head>
  <body>
  <form method='post' action='#'>
	  Número: <input type='text' name="1" id='1'></input>
    <button type='submit'>Submit</button>
  </form>
  </body>
</html> 

<?php
  if($_POST){
		echo strrev($_POST[1]);
	}
?>