<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobar si un número es positivo, negativo o cero</title>
</head>
<body>
    <h1>este es uno de mis primeros ejercicios en php</h1>
    <p> este en un ejemplo de parrafo </p>
    <?php
    $numero=-2;
     if ($numero>0):?>
        <h2>"el numero es positivo "</h2>
    <?php elseif ($numero<0):?>
        <h2> "el numero es negativo"</h2>
    <?php else:?>
        <h2> "el numero es cero"</h2>
    <?php endif;?>
    
</body>
</html>