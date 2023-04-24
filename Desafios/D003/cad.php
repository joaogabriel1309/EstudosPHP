<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversao</title>
</head>

<body>
    <main>
        <header>
            <h1>Conversao de reais em dolas</h1>
        </header>
        <?php             
            $cotacao = 5.17;
            $real = $_GET["Valor"] ?? 0;
            $dolar = $real / $cotacao;
            $padrao = numfmt_create("pt-br", NumberFormatter::CURRENCY);
            echo"Seus ". numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
        ?>
        <input type="button" onClick="javascript:history.go(-1)" value="oltar">
    </main>
</body>

</html>