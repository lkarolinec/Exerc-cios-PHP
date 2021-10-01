<?php
    /*A Granja Galinha Feliz vende ovos orgânicos vermelhos por R$ 3,25 a
    dúzia ou R$ 0,45 por unidade avulsa. Sabendo disso, escreva um
    programa que solicite ao usuário o número de ovos vendidos a um
    cliente e exiba o valor total devido com uma explicação apropriada. Por
    exemplo, se um cliente comprou 27 ovos, isso resulta em 2 dúzias e 3
    ovos; ou seja: duas dúzias a R$ 3,25 por dúzia e três ovos avulsos a 45
    centavos cada, totalizando de R$ 7,85. */

    $duzias = 12;
    $unidade = 1;

    $valorDuzia = 3.25;
    $valorUnidade = 0.45;

    $numeroDeOvosVendidos = " "; // inserir o número de ovos vendidos

    if ($numeroDeOvosVendidos == $duzias) { // possibilidade de ser exatamente uma dúzia completa
        $totalAPagar = $numeroDeOvosVendidos * $valorDuzia;

        echo("1 dúzia a R$3,25 por dúzia, totalizando os " + $totalAPagar);

    }else if ($numeroDeOvosVendidos < $duzias) { // possibilidade de ser menos que uma dúzia completa
        $totalAPagar = $numeroDeOvosVendidos * $valorUnidade;
        echo($numeroDeOvosVendidos + "unidades a R$0,45 cada, totalizando os " + $totalAPagar);

    } else if ($numeroDeOvosVendidos % 12 == 0) { // possibilidade de ser um número cravado em dúzias completas
        $numeroDeDuzias = $numeroDeOvosVendidos / 2;
        $totalAPagar = $numeroDeDuzias * $valorDuzia;
        echo($numeroDeDuzias + " dúzias a R$3,25 cada dúzia, totalizando " + $totalAPagar);

    } else { // possibilidade final com número quebrado
        $numeroDeDuzias = $numeroDeDuzias / 2;
        $numerodeUnidades = $numeroDeOvosVendidos - $numeroDeDuzias;

        $totalAPagar = ($numeroDeDuzias * $valorDuzia) + ($numerodeUnidades * $valorUnidade);

        echo($numeroDeOvosVendidos + " ovos comprados, sendo " + $numeroDeDuzias + "dúzias, a R$3,25 cada dúzia e "+ 
        $numerodeUnidades + " unidades a R$0,45 cada unidade, totalizando " + $totalAPagar);
    }

?>