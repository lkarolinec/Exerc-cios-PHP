<?php 

    /*Sabendo que há 60 segundos em um minuto, 3.600 segundos em uma hora e 86.400 segundo em um dia, crie um algoritmo que a partir
    de uma determinada quantidade de segundos fornecida pelo usuário,
    converte-a da seguinte maneira: 
    • Se a quantidade de segundos for maior ou igual a 60, o programa
    deverá exibir o número de minutos equivalente;
    • Se a quantidade de segundos for maior ou igual a 3.600, o
    programa deverá exibir o número de horas equivalente;
    • Se a quantidade de segundos for maior ou igual a 86.400, será
    exibir o número de dias equivalente. */

    $segundos = ""; // inserir o número de segundos
    
    if ($segundos  >= 60 ) { // primeira situação
        $minutos = $segundos / 60;
        echo($minutos + " minutos");

    } else if ($segundos >= 3.600){ // segunda situação
        $horas = $segundos / 3600;

    } else if ($segundos >= 86.400) { // terceira situação
        $dias = $segundos / 86400;
        echo($dias + " dias");
    }

?>
