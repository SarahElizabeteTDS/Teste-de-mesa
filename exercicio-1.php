<?php

    $numeros = [1, 22, 333];
    
    for($i=0; $i < 3; $i++)
    {
      print($numeros[$i] . "-");
    }

/*
  o valor de i na memória será: 0; 1; 2; 3 (quando ele verifica que o valor é 3, sai do for)
  
  o terminal exibirá:1-22-333-
*/
