<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Concatenação</title>

</head>

<body>

    <?php

    // Variáveis

    $nome = 'Diogo';
    $cor = 'azul';
    $idade = 30;
    $atividade_preferida = 'jogar video-game';

    // Concatenando operadores

    echo 'Olá ' . $nome . ', vi que sua  cor preferida é ' . $cor . ', estou vendo também que você possui ' . $idade . ' anos e que gosta de  ' . $atividade_preferida . '. ';

    // Aspas duplas
    echo '<br /> <br />';

    echo "Olá $nome, vi que sua  cor preferida é $cor, estou vendo também que você possui $idade anos e que gosta de $atividade_preferida." // Aspas duplas converte os valores das variáveis para o texto descrito

    ?>

</body>

</html>