<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado Apresentação</title>
</head>
<body>
    <header>
        <h1>Resultado dos Desafios</h1>
    </header>

    <main>
        <<?php
            $numero =$_GET["numero"] ?? 0;
            $numeroAntecessor = ($numero - 1);
            $numeroSucessor = ($numero + 1);

            echo "p>O numero escolhido foi <strong>$numero</strong>";
            echo "<p>O numero antecessor é <strong>$numeroAntecessor</strong>";
            echo "<p>O numero sucessor é <strong>$numeroSucessor</strong>";        
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>


</body>
</html>