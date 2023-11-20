<?php

  $lista_frutas = ['banana', 'abacaxi', 'melão', 'morango'];
    print "Teste 0: ";
      var_dump(count($lista_frutas));
    print "\nTeste 1: ";
      var_dump(in_array('banana', $lista_frutas));
    print "\nTeste 2: ";
      var_dump(in_array('alface', $lista_frutas));
    print "\nTeste 3: ";
      var_dump(array_search('morango', $lista_frutas));
    print "\nTeste 4: ";
      var_dump(sort($lista_frutas));
    print "\nTeste 5: ";
      var_dump(shuffle($lista_frutas));

/*
  Teste 0: int(4)     --->  quantidade de elementos no array

  Teste 1: bool(true)  ---> quer dizer que a string "banana" está no array
  
  Teste 2: bool(false)  ---> quer dizer que a string "alface" não está no array
  
  Teste 3: int(3)     ---> 3 é a posicao do "morango", no array, pois, o array comeca em 0
  
  Teste 4: bool(true)  ---> a funcao sort retorna o valor falso quando o sort é mal-sucedido, como ele reordenou corretamente, retornou verdadeiro.
  
  Teste 5: bool(true)  ---> mesma coisa que a funcao sort.
*/
