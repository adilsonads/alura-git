<?php

$texto = 'Texto com qualquer coisa poxa e caramba
agora vamos repetir as palavras para testar poxa e caramba.';

echo str_replace( //Substitui todas as ocorrências da string de procura com a string de substituição
    ['poxa' , 'caramba'],
     '***',
      $texto) . PHP_EOL . PHP_EOL;

echo strtr($texto, 'poxa', '***@') . PHP_EOL . PHP_EOL; // Traduz certos caracteres, nesse caso foi usado para substituir os caracteres
echo strtr($texto,  ['poxa' => 'p', 'caramba' => 'c']) . PHP_EOL . PHP_EOL; // nesse caso foi passado o conjunto de caracteres que será substituido