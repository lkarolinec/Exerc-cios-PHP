<?php
        /*Uma empresa concederá um aumento de salário aos seus
    funcionários, variável de acordo com o cargo, conforme a tabela abaixo.
    Faça um algoritmo que leia o salário e o cargo de um funcionário e
    calcule o novo salário. Se o cargo do funcionário não estiver na tabela,
    ele deverá, então, receber 40% de aumento. Mostre o salário antigo, o
    novo salário e a diferença.
        Código 101 - gerente - 10%
        Código 102 - Engenheiro - 20%
        Código 103 - Técnico - 30% */


    $codigoCargoAtual = " "; // inserior código do cargo atual
    $salarioAtual = " "; // inserir salário atual

    if ($codigoCargoAtual == 101 || $codigoCargoAtual == 102 || $codigoCargoAtual == 103) {
        if ($codigoCargoAtual == 101) {
            $novoSalario = ($salarioAtual * 10) / 100;
            $diferenca = $novoSalario - $salarioAtual;
            
            echo("Cargo: gerente, salário: " + $salarioAtual + ", novo salário: " + $novoSalario + " diferença de:
                 " + $diferenca);
        } else if ($codigoCargoAtual == 102) {
            $novoSalario = ($salarioAtual * 20) / 100;
            $diferenca = $novoSalario - $salarioAtual;
            
            echo("Cargo: engenheiro, salário: " + $salarioAtual + ", novo salário: " + $novoSalario + " diferença de:
                 " + $diferenca);
        } else {
            $novoSalario = ($salarioAtual * 30) / 100;
            $diferenca = $novoSalario - $salarioAtual;
            
            echo("Cargo: técnico, salário: " + $salarioAtual + ", novo salário: " + $novoSalario + " diferença de:
                 " + $diferenca);
        }
    } else {
        $novoSalario = ($salarioAtual * 40) / 100;
        $diferenca = $novoSalario - $salarioAtual;
        
        echo("Cargo: técnico, salário: " + $salarioAtual + ", novo salário: " + $novoSalario + " diferença de:
             " + $diferenca);
    }
?>