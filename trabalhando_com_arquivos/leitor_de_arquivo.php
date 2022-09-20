<?php

$arquivo = fopen('arquivo.txt', 'r'); // função para abrir arquivo 

while (!feof($arquivo)){ //feof verifica se chegou ao fim do arquivo
    $curso = fgets($arquivo); //lê uma linha do arquivo

    echo $curso;
}
fclose($arquivo); //fecha o arquivo