<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<title> verificar credenciales de usuario</title>
<body>
    <h1>Verificar credenciales de usuario</h1>
    <?php
    $usuario="Robert";
    $senha= 1234;
    if($usuario=="Robert" && $senha==123): ?>
        <h1>"Usuario y contranha correcto"</h1> 
   <?php else:?>
        <h1> "usuario/o contrasenha INCORRECTO "</h1>
    <?php endif ?>
</body>
</html>