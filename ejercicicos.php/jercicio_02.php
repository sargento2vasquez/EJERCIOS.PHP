<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobar si un número es par o impar</title>
</head>
<body>
    <h3> este es un H3 o titulo en <br> letras grandez</h3>
    <?php
    $numero=9;
    if($numero %2==0): ?>
    <h2>"el numero es par"</h2> 
    <?php else: ?>
        <h2> "el numero es impar"</h2> 
    <?php endif; ?>
    
    
</body>
</html>