<?php
// Crear un lienzo de 800x600 píxeles
$ancho = 800;
$alto = 600;
$imagen = imagecreatetruecolor($ancho, $alto);

// Colores
$fondo = imagecolorallocate($imagen, 0, 0, 0); // Negro
$blanco = imagecolorallocate($imagen, 255, 255, 255); // Blanco
$azulElectrico = imagecolorallocate($imagen, 0, 150, 255); // Azul eléctrico

// Rellenar el fondo
imagefill($imagen, 0, 0, $fondo);

// Generar tentáculos eléctricos
for ($i = 0; $i < 5; $i++) { // Dibujar 5 tentáculos
    $x = rand(200, 600);
    $y = rand(100, 300);
    for ($j = 0; $j < 30; $j++) { // Cada tentáculo tiene 30 segmentos
        $x2 = $x + rand(-20, 20);
        $y2 = $y + rand(10, 30);
        
        // Dibujar línea eléctrica
        imageline($imagen, $x, $y, $x2, $y2, $azulElectrico);
        $x = $x2;
        $y = $y2;
    }
}

// Guardar la imagen
header("Content-Type: image/png");
imagepng($imagen);
imagedestroy($imagen);
?>