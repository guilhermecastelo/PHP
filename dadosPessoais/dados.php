<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Não informado]";
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
        $sexo = isset($_GET['sexo']) ? $_GET['sexo'] : "[Não informado]";
        $idade = date("Y") - $ano;
        
        echo "$nome é $sexo tem $idade anos";
    ?>

    <a href="dados.html">Voltar</a>
</body>

</html>