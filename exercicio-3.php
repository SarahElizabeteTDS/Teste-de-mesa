<?php

    $sete_maravilhas = ["Cristo Redentor","Chichén Itzá","Coliseu","Muralha da China","Petra","Machu Picchu","Taj Mahal"];
    $valor_buscado = "Coliseu";
    
    for($i=0; $i < 7; $i++)
    {
        if($sete_maravilhas[$i] == $valor_buscado) 
        {
            print("o valor buscado está entre as maravilhas");
            break;
        }
    }

/*
  o valor de i na memória será: 0; 1; 2 (O "Coliseu está na posição 2, então, como no código, esta especificado o "break", o loop é interrompido)
  
  o terminal exibirá:o valor buscado está entre as maravilhas
*/
