<?php
    /*o índice pluviométrico é uma medida em milímetros que resulta da
    quantidade total da precipitação de água num determinado local.
    Sabendo disso, escreva um algoritmo que permita ao usuário informar o índice pluviométrico 
    de cada mês do ano. Após ler esses dados, o algoritmo deve exibir qual foi a precipitação 
    total no ano (ou seja, a soma do índice pluviométrico de cada mês), 
    a média de precipitação e quais foram os meses com os valores mais alto e mais baixo 
    de precipitação (ou seja, quais foram os meses em que choveu mais e menos no ano).*/

    $meses = array( 'Janeiro' => " ",
        'Fevereiro' => " ",
        'Marco' => " ",
        'Abril' => " ",
        'Maio' => " ",
        'Junho' => " ",
        'Julho' => " ",
        'Agosto' => " ",
        'Setembro' => " ",
        'Outubro' => " ",
        'Novembro' => " ",
        'Dezembro' => " ");



    $precipitacaoTotal = array_sum($meses);
    $precipitacaoMedia = $precipitacaoTotal / 12;

    // quem teve os valores máximos e mínimos
    $menosChuva = min($meses);
    $maisChuva = max($meses);


    echo("Precipitação total: " + $precipitacaoTotal);
    echo("Precipitação média: " + $precipitacaoMedia);
    echo("Mês mais chuvoso: " + $maisChuva);
    echo("Mês menos chuvoso: " + $menosChuva);

?>