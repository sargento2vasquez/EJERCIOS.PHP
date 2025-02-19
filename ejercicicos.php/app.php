<?php
const API_URL = "https://whenisthenextmcufilm.com/api";

// Inicializar cURL
$ch = curl_init(API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); 

// Ejecutar la petición
$result = curl_exec($ch);
curl_close($ch);

// Verificar si hubo errores en cURL
if ($result === false) {
    die("Error en cURL: No se pudo conectar a la API.");
}

// Decodificar el JSON
$data = json_decode($result, true);

// Verificar si la respuesta tiene datos válidos
if (!isset($data["title"], $data["poster_url"], $data["release_date"], $data["days_until"])) {
    die("Error: No se pudo obtener la información de la API.");
}

 //Limitar el resumen a 150 caracteres
$resumen_corto = mb_strimwidth($data["overview"], 0, 300, "...");
$resumen_corto = nl2br(htmlspecialchars($resumen_corto));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="La próxima película de Marvel"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La próxima película de Marvel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.fluid.classless.min.css"/>
    <style>
        body {
            display: grid;
            place-content: center;
            text-align: center;
        }
        section {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        img {
            border-radius: 19px;
        }
    </style>
</head>
<body>

    <main>
        <section>
            <h2>Próxima película de Marvel</h2>
            <img src="<?= htmlspecialchars($data["poster_url"]) ?>" width="200" 
                 alt="Póster de <?= htmlspecialchars($data["title"]) ?>" />

            <hgroup>
                <h3><?= htmlspecialchars($data["title"]) ?> se estrena en <?= htmlspecialchars($data["days_until"]) ?> días</h3>
                <p>Fecha de estreno: <?= htmlspecialchars($data["release_date"]) ?></p>

                <?php if (isset($data["following_production"]["title"])): ?>
                    <p>La siguiente película será: <strong><?= htmlspecialchars($data["following_production"]["title"]) ?></strong></p>
                <?php endif; ?>
                <p><strong>Resumen:</strong><br> <?= $resumen_corto ?></p>
            </hgroup>
        </section>
    </main>
    <footer>
        Desarrollado por <strong>Robert vasquez</strong> | © <?= date("Y") ?>  
        <br>
        Contacto: <a href="rv85878@gmail.com">rv85878@gmail.com</a>
    </footer>

</body>
</html>

