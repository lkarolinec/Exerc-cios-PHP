<?php
    /*Jogo do dólar. Construa um algoritmo onde o usuário informa o valor
    do dólar no câmbio atual e um certo número de moedas de 1, 5, 10, 25 e
    50 centavos de real. Se o valor total das moedas for o necessário para
    comprar exatamente um dolar, o programa deve parabenizar o usuário
    por ganhar o jogo. Caso contrário, o programa deve exibir uma
    mensagem indicando se o valor inserido foi maior ou menor do que o
    necessário. */

    $cotacaoDolar = "";
    
    // número de moedas de cada valor
    $moedas1 = "";
    $moedas5 = "";
    $moeadas10 = "";
    $moeads25 = "";
    $moedas50 = "";

    // cálculo de quanto vale cada moeda multiplicada pelo número de moedas
    $valorMoedas5 = $moedas5 * 0.05;
    $valorMoedas10 = $moeadas10 * 0.10;
    $valorMoedas25 = $moeads25 * 0.25;
    $valorMoeda50 = $moedas50 * 0.50;

    // valor total
    $somaValorTotal = $valormoedas1 + $valorMoedas5 + $valorMoedas25 + $valorMoedas10 + $valorMoeda50;

    // estrutura condicional, se o usuário atingiu ou não atingiu e suas variações
    if ($somaValorTotal == $cotacaoDolar) {
        echo("Parabéns, você concluiu o desafio!");
    } else if ($somaValorTotal > $cotacaoDolar) {
        echo("Desculpe, você inseriu um valor superior");
    } else {
        echo("Desculpe, você inseriu um valor inferior");
    }
?>