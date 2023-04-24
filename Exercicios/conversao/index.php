<?php 
    $cotacao = 5.17;
    $real = 1000;
    $dolar = $real / $cotacao;
    $padrao = numfmt_create("pt-br", NumberFormatter::CURRENCY);
    echo"Seus ". numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
?>