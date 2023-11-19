<?php

    $matriz_att5 = [
        [1, 3, 5],
        [7, 9, 11],
        [13, 15, 17]
    ];

    $soma = 0;

    $numLinhas = count($matriz_att5);
    $numColunas = count($matriz_att5[0]);

    for ($i = 0; $i < $numLinhas; $i++) 
    {
        for ($j = 0; $j < $numColunas; $j++) 
        {
            $soma += $matriz_att5[$i][$j];
        }

    }

    print "A soma dos números das matrizes é de: " . $soma;
