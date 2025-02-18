<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <p>crea un apiramide con asteriscos</p> 
   <?php
   $filas=5;
   for($i=1;$i<=$filas;$i++){
    for($j= 1;$j<=$i;$j++){
        echo "*". "\n";
   }
   echo"<br>";
}
?>
</body>
</html>