<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<title>Determinar la calificación de un estudiante</title>
<body>
    <?php
    $nota=10;
    if($nota>=18):?>
        <h2> La nota del estudiante es EXCELENTE </h2> 
    <?php elseif($nota>=16): ?>
    <h2> nota del estudiante es MUY BIEN </h2> 
    <?php elseif($nota>= 14): ?>
    <h2>nota del estudiante es  BIEN </h2>
    <?php else:?>
        <h2> el estudiante es un BURRO</h2>
    <?php endif;?>

</body>
</html>