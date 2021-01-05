<!DOCTYPE html>
<?php require_once 'vendor/autoload.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "./css/style.css">
    <title>Busque sua gíria</title>
</head>
<body>
    <div id="titulo">
    <h2>Pesquise sua gíria:</h2>
    </div>

    <div id="formulario">
        <form id="form" autocomplete="off" action="calculo.php" method="post">

            <input name="nome" type="text" placeholder="...">
            <input name="submit" type="submit">

         </form>
    </div>
    
</body>
</html>