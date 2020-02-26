<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <style>
    </style>
    <title>Atividade 9</title>
  </head>
  <body>
    <form method='post' action='#'>
      Permutação: <input type='text' name="1" id='1'></input>
      <button type='submit'>Submit</button>
    </form>
  </body>
</html> 
<?php
  function permute($str,$l,$r){ 
    if ($l==$r){
      echo $str."\n";
    }else{
      for($i=$l;$i<=$r;$i++){ 
        $str=swap($str,$l,$i); 
        permute($str,$l+1,$r); 
        $str=swap($str,$l,$i); 
      } 
    } 
  }     
  function swap($a,$i,$j){ 
    $temp; 
    $charArray=str_split($a); 
    $temp=$charArray[$i] ; 
    $charArray[$i]=$charArray[$j]; 
    $charArray[$j]=$temp; 
    return implode($charArray); 
  }   
  if($_POST){
    $str=$_POST[1]; 
    $n=strlen($str); 
    permute($str,0,$n-1);
  }
?>