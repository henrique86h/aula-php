<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foodtique</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Foodtique</h1>
    <?php
    $banners = ["salebanner.jpg", "salebanner2.jpg"];
    $sorteio = rand(0,1);
    echo "<img src='$banners[$sorteio]' class='imagem-banner'>";
    ?>

    <div class="lista">
        <?php
        $precos = ["R$ 21,42", "R$ 16,90", "R$ 0,95", "R$ 8,79", "R$ 18,99", "R$ 21,99", "R$ 51,99", "R$ 14,59"];
        $produtos = ["Achocolatado Pó Nescau Lata 670g","Desinfetante Pinho Sol Lavanda 1,75l", "Suco Em Pó Trink Uva 15g", "Leite Condensado Moça Integral 395g", "Sabão Líquido Omo Peças Íntimas e Biquínis 300ml", "Enxaguante Bucal Listerine Cool Mint Leve 500ml Pague 350ml", "Protetor Solar Sundown FPS 30 Praia e Piscina 200ml", "Caixa de Chocolate <br> Lacta Variedades 250,6g"];
        $fotos = ["nescau670.png", "pinhosol1750.jpg", "trinkuva.webp", "leitemoça.webp", "sabaoomo.webp", "listerine.webp", "sundown.webp", "caixalacta.webp"];
        $numero_produtos = count($produtos);
        $contador = 0;
        while($contador < $numero_produtos){
            echo "<div class = 'card'>";
            echo "<img src='$fotos[$contador]'>";
            echo "<br> $produtos[$contador] <br>";
            echo "<div class = 'precos'>";
            echo "$precos[$contador]<br>";
            echo "</div>";
            echo "</div>";

            $contador++;
        }

        ?>
    </div>
    
</body>
</html>