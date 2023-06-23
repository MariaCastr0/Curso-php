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



            // Códigos para gerar números aleatórios:

            // rand() = 1951 - Linear Congrential Generator;
            // rand() = 1951 - Linear Congrential Generator;
            // mt_rand() = 1997 - Mersenne Twister;
            // A partir do PHP 7.1, rand() é um simples apontamento para mt_rand();
            // random_int() = essa é uma das funções que gera números aleatórios criptograficamente seguros, normalmente utilizados com a função de segurança - para senhas - por exemplo. Portanto, para ocasiões como essa, a função random_int() é a mais indicada. Mas, ainda sim, há um porém: é uma função muito lenta - no que se propõe a executar - em comparação com as outras funções (também geradoras de números aleatórios), ou seja, é a função que leva mais tempo para gerar um número aleatório.
 
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
        
    </main>

    
</body>
</html>