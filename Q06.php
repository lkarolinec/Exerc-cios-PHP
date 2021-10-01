<?php
    /* A empresa de leilões Arremate Certo disponibiliza seu site para que
    qualquer pessoa possa vender seus produtos on line. Para que nenhum
    produto fique encalhado, ele só pode ser anunciado durante 6 semanas.
    Nesse período, seu preço cai 5% por semana, até que uma venda seja
    concretizada. Por exemplo, um produto que esteja sendo vendido por
    R$ 100.00 na primeira semana passa a custar R$ 100 x 0.95 = R$ 95.00
    na segunda semana e R$ 95,00 x 0.95 = R$ 90.25 na terceira semana.
    Construa um programa onde o usuário informe o valor do preço de um
    item e o computador escreva a como esse valor evolui ao longo das 6
    semanas. */


    $valorItem = " "; // inserir valor do item

    $porcentagem = ($valorItem * 5) / 100; // cálculo do valor dos 5%

    $semana1 = $valorItem;
    echo('Valor na primeira semana: ' + $valorItem);

    for ($semanas = 1; $semanas <= 6; $semanas += 1) { // laço de repetição para calcular cada semana e somar ao contador
        $valorPorSemana = $valorItem - $porcentagem;
        echo("Valor na semana: " + $valorPorSemana);
    }

?>