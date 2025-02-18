<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>recorrer un array</p>
    <?php
    $colores = ["red","blue","yelow","black","green","white"] ;
    for ($i=0;$i<count($colores);$i++){
        echo"".$i." = ".$colores[$i] ."<br>";
    }
    ?>
</body>
</html>