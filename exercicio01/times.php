<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paulistão 2024</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Times Paulistão 2024</h1>
    <br><br>
    <div class="lista">
        <?php
        $times = ["São Paulo FC","Palmeiras","Santos FC","Corinthians","Red Bull Bragantino","Mirassol","Ituano","Novorizontino", "Botafogo-SP", "Guarani", "Ponte Preta", "São Caetano", "Santo André", "Inter de Limeira", "São Bento"];
        $fotos = ["saopaulo.png", "palmeiras.png", "santos.png", "corinthians.png", "bragantino.png", "mirassol.png", "ituano.png", "novorizontino.png", "botafogosp.png", "guarani.png", "pontepreta.png", "saocaetano.png", "santoandre.png", "interlimeira.png", "saobento.png"];

        $numero_times = count($times);
        $contador = 0;
        while($contador < $numero_times){
            echo "<img src='$fotos[$contador]'>"; 
            echo "<br> $times[$contador] <br><br>";

            $contador++;
        }

        ?>
    </div>
</body>
</html>