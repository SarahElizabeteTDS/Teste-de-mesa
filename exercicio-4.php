<?php

    $mega_sena = [33, 4, 47, 7, 11, 25];
    $aux = 0;
    
    for($i=0; $i < 6; $i++)
    {
        for($j=0; $j < 5; $j++)
        {
            if($mega_sena[$j] > $mega_sena[$j + 1])
            {
                $aux = $mega_sena[$j];
                $mega_sena[$j] = $mega_sena[$j + 1];
                $mega_sena[$j + 1] = $aux;
            }
        }
    }
    
    for($i=0; $i < 6; $i++)
    {
        print($mega_sena[$i] .  " - ");
    }

/*
  o valor de i na memória no primeiro for será: 0; 1; 2; 3; 4; 5 e 6 (que encerra o primeiro for, porque a afirmativa  6 < 6 não vai mais ser verdadeira.)
  o valor de j será: 0; 1; 2; 3; 4 e 5 (que nao executará o for, pois a afirmativa sera falsa.)
  O código que está no escopo do 2 for se repetirá 30 vezes, pois 5 x 6 é 30! Porém, so fará o que está dentro do IF, se a condicao for verdadeira
  O valor de i no 3 for será: 0; 1; 2; 3; 4; 5 e 6 (que vai encerrar pelo mesmo motivo dos anteriores.)
  
  o terminal exibirá:4 - 7 - 11 - 25 - 33 - 47 -
*/
