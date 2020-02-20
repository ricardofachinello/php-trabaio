<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <style>
    </style>
    <title>Atividade 2</title>
  </head>
  <body>
    <form action="#" method="post">
        1: <input id=1 type="number" name="1"><br>
        2: <input id=2 type="number" name="2"><br>
        3: <input id=3 type="number" name="3"><br>
        4: <input id=4 type="number" name="4"><br>
        <input type="submit">
    </form>
  </body>
</html> 

<?php
  if($_POST){
      $a = array($_POST[1], $_POST[2], $_POST[3], $_POST[4]);
      $media = ($a[0] + $a[1] + $a[2] + $a[3])/4;
      if($media>=7){
          echo "Aprovado!";
      }
      if($media>=5 and $media<7){
        $nota = 10-$media;
        echo "Recuperação! <br>O aluno precisa de nota $nota para ser aprovado!";
      }
      if($media<5){
          echo "Reprovado!";
      }
  }
?>