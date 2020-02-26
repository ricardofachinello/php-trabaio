<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <style>
    </style>
    <title>Atividade 8</title>
  </head>
  <body>
  <h2>Arquivo</h2>

  <form action="#" method="POST" enctype="multipart/form-data">
      <input type="file" name="fileUpload">
      <input type="submit" value="Enviar">
  </form>
  </body>
</html> 

<?php
if(isset($_FILES['fileUpload'])){
    $name = $_FILES['fileUpload']['tmp_name'];
    $file = fopen($name, "r");
    $map = array(
        "A" => 0, "B" => 0, "C" => 0, "D" => 0, "E" => 0, "F" => 0, "G" => 0, "H" => 0, "I" => 0, "J" => 0, "K" => 0, "L" => 0, "M" => 0, "N" => 0, "O" => 0, "P" => 0, "Q" => 0, "R" => 0, "S" => 0, "T" => 0, "U" => 0, "V" => 0, "W" => 0, "X" => 0, "Y" => 0, "Z" => 0,
    );
    while(!feof($file)){
        $line = fgets($file);
        for ($i=0;$i<strlen($line);$i++){ 
            $letter = strtoupper($line[$i]);
            if (!ctype_alpha($letter)) {
              continue;
            }
            if($map[$letter] == ""){
                $map[$letter] = 1;
            }else{
                $map[$letter] = $map[$letter] + 1;
            }
        }
    }
    ksort($map);
    foreach ($map as $key=>$val){
        echo "<p><strong>" . $key . ":</strong>" . $val . "</p>";
    }
    fclose($file);
}
?>