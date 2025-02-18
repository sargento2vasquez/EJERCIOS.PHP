<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
do {
    echo "Ingrese un número (0 para salir): ";
    $numero = intval(trim(readline())); // Usamos readline() en lugar de fgets(STDIN)

    if ($numero != 0) {
        echo "Ingresaste el número $numero\n"; // Agregamos un salto de línea para mejor formato
    }
} while ($numero != 0);

echo "Fin del programa\n";
?>
</body>
</html>