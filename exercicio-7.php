<?php

    $matriz = [];

    for ($i = 0; $i < 3; $i++) 
    {
        for ($j = 0; $j < 5; $j++) 
        {
            $matriz[$i][$j] = lerNumeroUsuario();
        }
    }

    print "Números e as suas posicoes: \n";
    for ($i = 0; $i < 3; $i++) 
    {
        for ($j = 0; $j < 5; $j++) 
        {
            if ($matriz[$i][$j] % 2 == 0) //porque se o resultado do modulo por 2 da 0, o numero é par!
            {
                print "Numero par: {$matriz[$i][$j]}\n";
                print "Posicao: ($i, $j)\n"; //nao sei porquê o \n nao está funcionando
            }
        }
    }


    function lerNumeroUsuario() 
    {
        $numero = readline("Digite um número inteiro: ");

        while (!is_numeric($numero) || intval($numero) != $numero) //se nao for numerico, ou se nao for inteiro, ele pede de novo
        {
            print "Número invalido, tem que ser inteiro\n";
            $numero = readline("Digite novamente: ");
        }
        
        return $numero; 
    }
