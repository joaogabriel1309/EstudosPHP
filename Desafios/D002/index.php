<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerador de números aleatórios</title>
</head>
<body>
    <main>
        <h1>Gerador de números aleatórios</h1>
        <p>Gerando números aleatórios entre 0 a 100</p>        
        <?php     
            $numeroAleatorio = rand(0,100);
            echo"<p>O valor gerado foi <strong>$numeroAleatorio</strong> </p>";
        ?>
        <input type = "button" onclick="history.go(0)" value="Gerar Número">
    </main>
</body>
</html>