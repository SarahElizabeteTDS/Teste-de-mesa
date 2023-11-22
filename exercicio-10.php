<?php
    
    function modoficarPorReferencia (&$string, &$caractere) 
    {
        $apareceu = substr_count($string, $caractere);
        $string = str_replace($caractere, '', $string);
        
       //numero de vezes que aparece
        $caractere = $apareceu;
    }

    $teste = "Jeffinho é um querido";
    $teste2 = 'e';

    print $teste . "\n";

    modoficarPorReferencia($teste, $teste2);

    print $teste . "\n";

    //veja que o é, não é substituido, pois na tabela ASCII, "e" e "é" são caracteres diferentes


    //https://www.php.net/manual/en/function.substr-count.php
    //https://www.php.net/manual/pt_BR/function.str-replace.php
    //referencias de funcao!!!
