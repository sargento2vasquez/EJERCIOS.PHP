<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<title>sumar los numeros de 1 la 50</title>
<body>
    <?php
    $suma=0;
    for ($i = 0; $i <=50; $i++) {
        
        $suma= $suma + $i;
     print_r( "\n".$suma );
    }
    ?>  
</body>
</html>