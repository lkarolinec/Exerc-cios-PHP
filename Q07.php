<?php
    /*Escreva um algoritmo que leia as idades de 2 homens e de 2
    mulheres (considere que as idades dos homens serão sempre
    diferentes entre si, bem como as das mulheres). Calcule e escreva a
    soma das idades do homem mais velho com a mulher mais nova, e o
    produto das idades do homem mais novo com a mulher mais velha.*/

    $idadeHomem1 = "";
    $idadeHomem2 = "";

    $idadeMulher1 = "";
    $idadeMulher2 = "";

    // descobrindo qual homem mais velho
    if ($idadeHomem1 > $idadeHomem2) {
        $idadeHomemMaior = $idadeHomem1;
        // descobrindo qual mulher mais velha
        if ($idadeMulher1 > $idadeMulher2) {
            $idadeMulherMaior = $idadeMulher1;
            $idadeMulherMenor = $idadeMulher2;
        } else{
            $idadeMulherMaior = $idadeMulher2;
            $idadeMulherMenor = $idadeMulher1;

        }
        // realizando as operações
        $somaDasIdades = $idadeHomem1 + $idadeMulherMaior;
        $produtoIdades = $idadeHomem2 * $idadeMulherMenor;

        echo('Soma da idade do homem mais velho com a mulher mais nova: ' + $somaDasIdades);
        echo('Produto da idade do homem mais novo com a mulher mais velha' + $produtoIdades);

    } else { // se o outro é o mais velho, então
        $idadeHomemMaior = $idadeHomem2;

        // descobrindo qual mulher mais velha
        if ($idadeMulher1 > $idadeMulher2) {
            $idadeMulherMaior = $idadeMulher1;
            $idadeMulherMenor = $idadeMulher2;

        } else{
            $idadeMulherMaior = $idadeMulher2;
            $idadeMulherMenor = $idadeMulher1;
        }

        // realizando as operações
        $somaDasIdades = $idadeHomem1 + $idadeMulherMaior;
        $produtoIdades = $idadeHomem2 * $idadeMulherMenor;

        echo('Soma da idade do homem mais velho com a mulher mais nova: ' + $somaDasIdades);
        echo('Produto da idade do homem mais novo com a mulher mais velha' + $produtoIdades);
    }




?>