<?php
    /* Crie um algoritmo que solicite ao usuário que informe o número de
    homens e o número de mulheres matriculadas numa classe e exiba os
    percentuais equivalentes a cada sexo na tela. */

    // quantidade de pessoas na turma
    $homens = 10;
    $mulheres = 30;

    $totalClasse = $homens + $mulheres;

    // cálculo da porcentagem dos homens
    $porcentagemH = ($homens * $totalClasse) / 100;

    // cálculo da porcentagem das mulheres
    $porcentagemM = ($mulheres * $totalClasse) / 100;

    echo("A porcentagem de homens na classe é de: " + " " + "$porcentagemH");
    echo("A porcentagem de mulheres na classe é de: " + " " + "$porcentagemM");

?>