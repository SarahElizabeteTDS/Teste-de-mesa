<?php

    $pessoa = ['nome' => 'John Doe', 'idade' => 54, 'altura' => 1.8, 'formacao' => 'Físico', 'profissao' => 'Astronauta'];

    print "Teste 0: ";
        var_dump(count($pessoa));
    print "\nTeste 1: ";
        var_dump(in_array('Físico', $pessoa));
    print "\nTeste 2: ";
            var_dump(in_array('Detetive', $pessoa));
    print "\nTeste 3: ";
        var_dump(array_search('nome', $pessoa));
    print "\nTeste 4: ";
        var_dump(array_key_exists('profissao', $pessoa));
    print "\nTeste 5: ";
        var_dump(array_key_first($pessoa));
    print "\nTeste 6: ";
        var_dump(array_key_last($pessoa));
    print "\nTeste 7: ";
        var_dump(sort($pessoa));

/*
Teste 0: int(5) ---> O teste 0, conta quantos elementos tem o array.

Teste 1: bool(true) ---> Verifica se a string "fisico" está no array e ve que está.

Teste 2: bool(false) ---> Verifica se a string "detetive" está no array, ve que nao esta.

Teste 3: bool(false) ---> verifica se acha a string "nome", porém, "nome" é uma key.

Teste 4: bool(true) ---> verifica se acha a key "profissao", e achou!

Teste 5: string(4) "nome"  ---> mostra a primeira key, a "nome", que é uma string de 4 caracteres.

Teste 6: string(9) "profissao" ---> mostra a ultima key, a "profissao", que é uma string de 9 caracteres.

Teste 7: bool(true) ---> sort foi bem-sucedido!
*/
