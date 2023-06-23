<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta Desafio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
        <?php 
        $n = $_REQUEST["num"] ?? 0;
        $a = $n - 1;
        $s = $n + 1;
    
          echo "O número escolhido foi $n.";
          echo "<br>O seu <strong>antecessor</strong> é $a.";
          echo "<br>O seu <strong>sucessor</strong> é $s.";
    ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>    
</body>
</html>