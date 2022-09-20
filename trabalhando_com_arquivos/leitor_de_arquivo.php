<?php

$arquivo = fopen('arquivo.txt', 'r'); // função para abrir arquivo 

while (!feof($arquivo)){
    $curso = fgets($arquivo);

    echo $curso;
}
fclose($arquivo);