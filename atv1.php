<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <style>
    </style>
    <title>Atividade 1</title>
  </head>
  <body>
    <form action="#" method="post">
        1: <input id=1 type="number" name="1"><br>
        2: <input id=2 type="number" name="2"><br>
        3: <input id=3 type="number" name="3"><br>
        4: <input id=4 type="number" name="4"><br>
        5: <input id=5 type="number" name="5"><br>
        <input type="submit">
    </form>
  </body>
</html> 

<?php
  if($_POST){
      $a = array($_POST[1], $_POST[2], $_POST[3], $_POST[4], $_POST[5]);
      sort($a);
      echo "Array ordenado: ";
      foreach($a as $value){
        echo "$value ";
      }
  }
?>