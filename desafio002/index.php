<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2 - PHP: Sorteador de números aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
            $min = 0;
            $max = 100;

            $num = mt_rand($min,$max);

            echo "Gerando um número aleatório entre <strong>$min</strong> e <strong>$max</strong>.";
            echo "<br> O número gerado foi <strong>$num</strong>."
        ?>
    </main>

    
</body>
</html>