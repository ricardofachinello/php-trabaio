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
        Tamanho: <input id=1 type="float" name="1"><br>
        Sexo (M/F): <input id=2 type="string" name="2"><br>
        <input type="submit">
    </form>
  </body>
</html> 

<?php
  if($_POST){
      $tamanho = $_POST[1];
      $sexo = $_POST[2];
      if($sexo=='M'){
        $imc = (72.7*$tamanho)-58;
      }else{
        $imc = (62.1*$tamanho)-44;
      }
      echo "O peso ideal é $imc";
  }
?>