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
            $dataInicio = date("m-d-y", strtotime("-7 days"));
            $dataFim = date("m-d-Y");                    
            $URL = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$dataInicio.'\'&@dataFinalCotacao=\''.$dataFim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';    
            $dados = json_decode(file_get_contents($URL), true);            
            //var_dump($dados);
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            
            $real = $_REQUEST["Valor"] ?? 0;
            $dolar = $real / $cotacao;
            $padrao = numfmt_create("pt-br", NumberFormatter::CURRENCY);
            echo"Seus ". numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
            echo"<br>Cotacao atual:" . numfmt_format_currency($padrao, $cotacao, "USD");
        ?>
        <input type="button" onClick="javascript:history.go(-1)" value="Voltar">
    </main>
</body>

</html>