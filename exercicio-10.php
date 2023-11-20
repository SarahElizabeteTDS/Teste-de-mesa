<?php
    
    function modoficarPorReferencia (&$string, &$caractere) 
    {
        $apareceu = substr_count($string, $caractere);
        $string = str_replace($caractere, '', $string);
        
       //numero de vezes que aparece
        $caractere = $apareceu;
    }


    //https://www.php.net/manual/en/function.substr-count.php
    //https://www.php.net/manual/pt_BR/function.str-replace.php
    //referencias de funcao, achei uns artigos mais antigos na net ai!
