<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Filmes</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Filmes 🎬</h1>
    <?php
    $banners = ["banner01.jpg", "banner02.jpg", "banner03.jpg", "banner04.png"];
    $sorteio = rand(0,4);
    echo "<img src='$banners[$sorteio]' class='imagem-banner'>";
    ?>
    <div class="lista">
        <?php
        $filmes = ["Vingadores - Ultimato", "Pulp Fiction", "Kill Bill", "Carros", "Wall-e", "Festa das salsichas"];
        $capas = ["vingadores.jpg", "pulp.jpg", "kill.jpg", "carros.jpg", "walle.jpg", "festa.jpg" ];

        $numero_filmes = count($filmes);
        $contador = 0;
        while($contador < $numero_filmes){
            echo "<img src='$capas[$contador]'>";
            echo "<br> $filmes[$contador] <br><br>";

            $contador++;
        }

        ?>
    </div>
    
</body>
</html>