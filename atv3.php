<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <style>
    </style>
    <title>Atividade 3</title>
  </head>
  <body>
    <form action="#" method="post">
        Preço da Gasolina: <input id=1 type="float" name="1"><br>
        Preço do Álcool: <input id=2 type="float" name="2"><br>
        <input type="submit">
    </form>
  </body>
</html> 

<?php
  if($_POST){
      $a = array($_POST[1], $_POST[2]);
      $magic = $a[0]*0.7;
      if($magic>$a[1]){
        echo "Abasteça com Álcool!";
      }else{
        echo "Abasteça com Gasolina!";
      }
  }
?>