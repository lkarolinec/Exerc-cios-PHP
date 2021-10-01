<?php 
    /* 1) Um saco de biscoitos contém 40 unidades que, de acordo com as
    informações do rótulo, equivalem a 10 porções. Ainda de acordo com o
    rótulo, uma porção possui 300 calorias. Baseado nessas informações,
    crie um algoritmo que permita ao usuário inserir o número de biscoitos
    que ele consumiu e imprima na tela a quantidade de calorias
    correspondentes. */

    // Inserir a quantidade de biscoitos
    $quantidadeUnidade = 40;

    // Se 40 unidades equilavem a 10 porções, então 4 unidades equivalem a 1 porção. 
    $quantidadePorcao = $quantidadeUnidade / 4;

    // Se uma porção possui 300 calorias, a quantidade de calorias é xPorções . 300
    $quantidadeCalorias = $quantidadePorcao * 300;


    echo($quantidadeCalorias);
?>