<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bem-Vindo</title>
</head>

<body>
    <header>
        <h1>Resultado do processo</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome </strong>! Este e meu site!";
        ?>        
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a>
        </p>
    </main>
</body>

</html>