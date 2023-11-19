<?php

    $sete_maravilhas = ["Cristo Redentor","Chichén Itzá","Coliseu","Muralha da China","Petra","Machu Picchu","Taj Mahal"];
    
    for($i=0; $i < 7; $i++)
    {
        print($i+1 . ": " . $sete_maravilhas[$i] .  "\n");
    }

/*
  o valor de i na memória será: 0; 1; 2; 3; 4; 5; 6; 7 (quando chega a sete, sai do for)
  
  o terminal exibirá:
  1: Cristo Redentor
  2: Chichén Itzá
  3: Coliseu
  4: Muralha da China
  5: Petra
  6: Machu Picchu
  7: Taj Mahal
*/
